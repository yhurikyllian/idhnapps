<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$this->load->model('model_agenda_content');
		$this->load->view('view_agenda');
	}
}
}
