<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$this->load->view('view_home');
	}
}
}
