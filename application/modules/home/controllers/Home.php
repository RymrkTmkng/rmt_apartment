<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index(){
		$data['page_title'] = "Rental Apartment";
		$data['tab_title'] = "Home | Rental Apartment";
		
		$this->load_page('home',$data);
	}
}
?>
