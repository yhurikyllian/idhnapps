<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	
	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		if(!($this->session->userdata('id_event'))) {
			$id = array('id_event' => $_GET['id_event_selected'] );
			$this->session->set_userdata($id);
		}


		$this->load->view('view_menu');
	}
}
}
