<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_logout extends CI_Model {

	public function logout() {
		$this->session->sess_destroy();
		unset($_SESSION['screen_width']);
		unset($_SESSION['screen_height']);
		unset($_SESSION['username']);
		unset($_SESSION['nama']);
		redirect('login');
	}
	
}
