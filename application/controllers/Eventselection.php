<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventselection extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$this->model_security->getsecurity();
		$this->load->model('model_eventselection');
		$content['user'] = $this->model_eventselection->getusername();

		$this->load->view('view_eventselection', $content);
	}
	} 

	
}
