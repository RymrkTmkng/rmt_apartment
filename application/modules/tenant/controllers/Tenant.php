<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tenant extends MY_Controller
{

    public function index(){
        $data = array(
            'page_title' => 'Tenants',
            'tab_title'  => 'Tenants'
        );
        $this->load_page('tenant',$data);
    }

    public function getTenants(){
        $new_array = array();

        //Datatables Variables
        $limit  = $this->input->post('length');
        $offset = $this->input->post('start');
        $search = $this->input->post('search');
        $order  = $this->input->post('order');
        $draw   = $this->input->post('draw');

        $column_order = array(
            'first_name',
            'middle_name',
            'last_name',
            'room',
            'start_date',
            'action'
        );

        $select = 'info.first_name,info.middle_name,info.last_name,room_number,starting_date';
        $where  = array();
        $join   = array(
            'user' => 'user.user_id = tenant.user_id',
            'user_info' => 'user.user_info_id = user_info.user_info_id'
        );
        $group = array();

        $list = datatables('tenant', $column_order, $select, $where, $join, $limit, $offset, $search, $order, $group = '');
        echo '<pre>';
        print_r($list);
        echo '</pre>';
        exit();
        foreach ($list['data'] as $key => $value){
            $value->user_detail = json_decode($value->user_detail);
            $value->gender      = $value->user_detail->gender;
            
            if(isset($value->user_detail->phone) && !empty($value->user_detail->phone) ){
                $value->phone = $value->user_detail->phone;
            }else{
                $value->phone = "<p style = 'color: #6c6a6a;font-size: 13px; padding-top: 15px;'><em>No data available</em></p>";
            }
            
            unset($value->user_detail);

            $new_array[] = $value;
        }

        $output = array(
            'draw'              => $draw,
            'recordsTotal'      => $list['count_all'],
            'recordsFiltered'   => $list['count'],
            'data'              => $new_array
        );
        json($output);
        
    }
}