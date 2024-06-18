<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tenant extends MY_Controller
{

    public function index()
    {
        $data = array(
            'page_title' => 'Tenants',
            'tab_title'  => 'Tenants'
        );
        $this->load_page('tenant', $data);
    }

    public function getRoomList()
    {

        $option['select'] = 'room_number';
        $option['where']  = array(
            'status' => '= 0'
        );

        $list = getrow('room', $option);

        json($list);
    }
    public function getTenantList()
    {

        $new_array = array();



        //Datatables Variables

        $limit  = $this->input->post('length');

        $offset = $this->input->post('start');

        $search = $this->input->post('search');

        $order  = $this->input->post('order');

        $draw   = $this->input->post('draw');


        //this is to set what column will the order be based
        $column_order = array(
            'last_name'
        );

        $select = 'tenant.*,info.first_name,info.middle_name,info.last_name';

        $where  = '';

        $join   = array(
            'user' => 'tenant.user_id = user.user_id',
            'user_info as info' => 'info.user_info_id = user.user_info_id'

        );

        $group = array();

        $list = datatables('tenant', $column_order, $select, $where, $join, $limit, $offset, $search, $order, $group);

        $new_array = $list['data'];

        $output = array(

            'draw'              => $draw,

            'recordsTotal'      => $list['count_all'],

            'recordsFiltered'   => $list['count'],

            'data'              => $new_array

        );
        json($output);
    }

    public function getTenant($id)
    {
        $option['select'] = 'first_name,middle_name,last_name,room_number,starting_date';
        $option['where']  = array(
            'tenant_id' => $id
        );
        $option['join'] = array(
            'user' => 'user.user_id = tenant.user_id',
            'user_info as info' => 'info.user_info_id = user.user_info_id'
        );

        $tenant = getrow('tenant', $option, 'row');

        json($tenant);
    }

    public function getUserInfoByName($fn, $mn, $ln)
    {
        $option['select'] = 'user_info_id';
        $option['where']  = array(
            'first_name'  => $fn,
            'middle_name' => $mn,
            'last_name'   => $ln
        );

        $info_id = getrow('user_info', $option, 'row');

        return $info_id;
    }

    public function addTenantInfo()
    {
        $response = array(
            'success' => false,
            'message' => 'Unknown error, please try again !',
            'icon'    => 'info'
        );
        $post = $this->input->post();
        $input = array();
        foreach ($post as $field => $value) {
            $input[$field] = trim($value);
        }

        $infocheck = $this->getUserInfoByName($input['first_name'], $input['middle_name'], $input['last_name']);

        if ($infocheck) {
            $response = array(
                'success' => false,
                'message' => 'User already Exist!',
                'icon'       => 'info'
            );
            exit;
        }

        $result = insert('user_info', $input);

        if ($result) {

            $response = array(
                'success' => true,
                'message' => 'Tenant Info Saved!',
                'icon'    => 'success',
                'id'      => $result
            );
        }

        json($response);
    }

    public function checkUsername($un)
    {

        $option['select'] = '*';
        $option['where'] = array(
            'username' => $un
        );

        $result = getrow('user', $option, 'count');

        return $result;
    }

    public function addUserCreds()
    {
        $response = array(
            'success' => false,
            'message' => 'Unknown Error, Please try again!',
            'icon'    => 'info'
        );

        $post = array();

        foreach ($this->input->post() as $key => $value) {
            $post[$key] = trim($value);
        }

        $userCount = $this->checkUsername($post['username']);

        if ($userCount === 0) {
            $passCount = strlen($post['password']);
            if ($passCount >= 8) {

                if ($post['password'] == $post['confirm_password']) {
                    unset($post['confirm_password']);
                    $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);

                    $creds = insert('user', $post);

                    if ($creds) {
                        $response = array(
                            'success' => true,
                            'message' => 'Credentials successfully saved!',
                            'icon'    => 'success',
                            'user_id' => $creds
                        );
                    }
                }
            }
        } else {
            $response = array(
                'success' => false,
                'message' => 'Username already exist!',
                'icon'    => 'info'
            );
        }

        json($response);
    }

    public function addTenantRoomInfo()
    {

        $response = array(
            'success' => false,
            'message' => 'Unknown error, please try again.',
            'icon'    => 'info'
        );

        $post = $this->input->post();
        $input = array();

        foreach ($post as $key => $value) {
            $input[$key] = trim($value);
        }

        $result = insert('tenant', $input);

        if ($result) {
            $response = array(
                'success' => true,
                'message' => 'Tenant Successfully Added',
                'icon'    => 'success'
            );
        }

        if ($response['success'] = true) {

            $room_number = $input['room_number'];
            $set = array(
                'status' => '1'
            );
            $where = array(
                'room_number' => $room_number
            );

            update('room', $set, $where);
        }


        json($response);
    }

    public function updateTenant()
    {

        $response = array(
            'success' => false,
            'message' => 'Update Failed, please try again !',
            'icon'    => 'info'
        );

        $post = $this->input->post();
        $input = array();
        foreach ($post as $field => $value) {
            $this->form_validation->set_rules($field, 'required');
            $input[$field] = trim($value);
        }
        $user_id = $input['user_id'];

        $info_id = $this->MY_Model->raw("SELECT user_info_id FROM user WHERE user_id = $user_id", 'row');
        $info_id = $info_id->user_info_id;

        $set = array(
            'user_info' => array(
                'first_name' => $input['first_name'],
                'middle_name' => $input['middle_name'],
                'last_name'  => $input['last_name']
            ),
            'tenant' => array(
                'room_number' => $input['room_number'],
                'starting_date' => $input['starting_date']
            )
        );

        $where = array(
            'tenant' => array(
                'tenant_id' => $input['tenant_id']
            ),
            'user_info' => array(
                'user_info_id' => $info_id
            )
        );

        $updateTenant = update('tenant', $set['tenant'], $where['tenant']);
        $updateInfo   = update('user_info', $set['user_info'], $where['user_info']);

        if ($updateTenant && $updateInfo) {
            $response = array(
                'success' => true,
                'message' => 'Updated successfully',
                'icon'    => 'success'
            );
        }

        json($response);
    }

    public function getUserInfoId($id)
    {
        $option['select'] = 'user_info_id';
        $option['where']  = array(
            'user_id' => $id
        );

        $info_id = getrow('user', $option, 'row');

        if ($info_id) {
            $option2['select'] = 'room_number';
            $option2['where']  = array(
                'user_id' => $id
            );

            $room_num = getrow('tenant', $option2, 'row');
        }

        $res = array(
            'user_info_id' => $info_id->user_info_id,
            'room_number'  => $room_num->room_number
        );

        json($res);
    }

    public function deleteTenant()
    {
        $response = array(
            'success' => false,
            'message' => 'Unknown error, please try again',
            'icon'    => 'info'
        );

        $info_id = $this->input->post('user_info_id');
        $room_num = $this->input->post('room_number');

        $where = array(
            "user_info_id" => $info_id
        );

        $res = delete('user_info', $where);

        $set = array(
            'status' => '0'
        );
        $where = array(
            'room_number' => $room_num
        );

        $update = update('room', $set, $where);


        if ($res && $update) {

            $response = array(
                'success' => true,
                'message' => 'Tenant successfully deleted',
                'icon'    => 'success'
            );
        }

        json($response);
    }
}
