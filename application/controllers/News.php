<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$this->load->model('model_news');
		$this->load->view('view_news');
	}
}
}
