<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendees extends CI_Controller {

	public function index($name="")
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
    	if($name!==""){
    		$content['nama'] = $name;
    	}else{
    		$content['nama'] = "";
    	}

		$this->load->model('model_attendees');
		$content['id'] = $this->session->userdata('id_event');
		$this->load->view('view_attendees', $content);
	}
}

	public function cari($name=""){
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$content['nama'] = $name;
		$this->load->model('model_speaker');
		$this->load->view('view_speaker', $content);
	}
	}

}
