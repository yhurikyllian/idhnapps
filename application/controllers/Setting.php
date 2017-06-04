<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
    	$this->load->model('Model_setting');
		$this->load->view('view_setting');
	}
}
}
