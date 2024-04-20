<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Billing extends MY_Controller
{

    public function index(){
        $data = array(
            'page_title' => 'Billing',
            'tab_title'  => 'Billing'
        );
        $this->load_page('billing',$data);
    }
}