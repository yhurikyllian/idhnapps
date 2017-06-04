<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION['username'])){
			redirect('login');
		}else{
			$this->load->model('model_polling');
			$status = $this->model_polling->getstatus();
			if ($status == 1) {
				$this->load->view('view_polling');
			} else {
				$this->load->view('view_maintenance');
			}


		}


	}
	public function vote() {
			$this->load->model('model_polling');
			$this->model_polling->vote(1, 0);
		}
}
