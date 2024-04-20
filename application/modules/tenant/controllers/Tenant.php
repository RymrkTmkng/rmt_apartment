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
}