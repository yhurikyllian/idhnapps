<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaker extends CI_Controller {

	public function index($name="")
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
    	if($name!==""){
    		$nama['nama'] = $name;
    	}else{
    		$nama['nama'] = "";
    	}
		$this->load->model('model_speaker');
		$this->load->view('view_speaker', $nama);
	}
}

	public function cari($name=""){
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$nama['nama'] = $name;
		$this->load->model('model_speaker');
		//$this->model_speaker->getspeaker($nama);
		$this->load->view('view_speaker', $nama);
	}
	}
}
