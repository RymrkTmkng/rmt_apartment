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
            $this->form_validation->set_rules($field, 'required');
            $input[$field] = trim($value);
        }

        $result = insert('user_info',$input);
        if ($result) {
           
           $response = array(
            'success' => true,
            'message' => '',
            'icon' => 'success'
           );
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
}
