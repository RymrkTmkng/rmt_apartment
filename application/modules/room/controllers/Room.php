<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Room extends MY_Controller
{

    public function index(){
        $data = array(
            'page_title' => 'Rooms',
            'tab_title'  => 'Rooms'
        );
        $this->load_page('room',$data);
    }
}