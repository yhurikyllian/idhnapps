<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsdetail extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$this->load->model('model_news_detail');
		$news = $this->model_news_detail->getnews();
		$this->load->view('view_news_detail', $news);
	}
}
}
