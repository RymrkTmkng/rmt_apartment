<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MY_Controller
{

    public function index()
    {
        $data['page_title'] = 'Dashboard';
        $data['tab_title'] = 'Dashboard';
        $this->load_page('dashboard', $data);
    }
}
