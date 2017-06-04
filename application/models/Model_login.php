<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function getlogin($u, $p) {
		$this->db->where('username', $u);
		$this->db->where('password', $p);
		$query = $this->db->get('user');

		if($query->num_rows() > 0) {
			//$data = $query->result_array();
			

			foreach ($query->result() as $row) {
				$sess = array('id_user' => $row->id_user,
				'name' => $row->name,
				'username' => $row->username,				
				'interest' => $row->interest,
				'phone' => $row->phone,
				'email' => $row->email,
				'job' => $row->job,
				'user_photo' => $row->user_photo );
				//$this->session->set_userdata($sess);
				//redirect('eventselection');
			}
			//var_dump($sess);

			$this->session->set_userdata($sess);
			redirect('eventselection');
		} else {
			$this->session->set_flashdata('mismatch', 'Sorry username and password doesnt match');
			redirect('login');
		}

	}
	
}
