<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_setting extends CI_Model {

	public function getusername() {
		return $this->session->userdata('name');
	}
	public function changepass($u, $p) {
		$this->db->where('username', $u);
		$this->db->where('password', $p);
		$query = $this->db->get('user');
	}
		
}
