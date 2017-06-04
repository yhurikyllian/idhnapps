<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speakerprofile extends CI_Controller {
	public function index()
	{
		if(!isset($_SESSION['username'])){
        redirect('login');
    }else{
		$this->load->model('model_speaker_profile');
		$this->load->view('view_speaker_profile');
	}
}
}
