<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_eventselection extends CI_Model {

	public function getusername() {
		return $this->session->userdata('name');
	}
	
	public function geteventname($id_user) {

		//$query = $this->db->query("SELECT e.id_event, e.name as nameevent FROM auserevent ue JOIN aevent e ON  ue.id_event = e.id_event JOIN auser u ON ue.id_user = u.id_user WHERE ue.id_user = $id_user order by ue.id_event");
		$query = $this->db->query("SELECT p.activity_code, p.activity_name FROM userproject up JOIN project p ON  up.activity_code = p.activity_code JOIN user u ON up.id_user = u.id_user WHERE up.id_user = $id_user order by up.activity_code");

		foreach ($query->result() as $row) {
			$content['activity_name'] = $row->activity_name;
			$content['activity_code'] = $row->activity_code;
			$this->load->view('view_listevent', $content);
		}
		
	}	
}
