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

        $select = 'tenant.*,info.user_id,info.first_name,info.middle_name,info.last_name';

        $where  = '';

        $join   = array(
            'user' => 'tenant.user_id = user.user_id',
            'user_info as info' => 'info.user_info_id = user.user_info_id'

        );

        $group = array();

        $list = datatables('tenant', $column_order, $select, $where, $join, $limit, $offset, $search, $order, $group);


        foreach ($list as $key => $value) {
            foreach ($value[0] as $k => $v) {
                $new_array[$k] = $v;
            }
        }
        echo '<pre>';
        print_r($new_array);
        echo '</pre>';
        exit();
        $output = array(

            'draw'              => $draw,

            'recordsTotal'      => $list['count_all'],

            'recordsFiltered'   => $list['count'],

            'data'              => $new_array

        );

        json($output);
    }
}
