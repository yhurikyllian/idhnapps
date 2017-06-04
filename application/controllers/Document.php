<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$this->load->model('model_document');
		$content['total'] = $this->model_document->gettotaldoc();
		$content['download'] = $this->model_document->gettotaldownload();
		$this->load->view('view_document', $content);
	}
}
}
