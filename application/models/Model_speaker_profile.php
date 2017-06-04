<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_speaker_profile extends CI_Model {

	public function getcontent($id) {
	  	$query = $this->db->query("SELECT * FROM speaker ORDER BY id_speaker=$id");

		if($query->num_rows() > 0) {

			foreach ($query->result() as $row) {
				$data = array('id_speaker' => $row->id_speaker,

					'name' => $row->name,
					'shortbio' => $row->shortbio,
					'bio' => $row->bio,
					'address' => $row->address,
					'email' => $row->email,
					'speaker_photo' => $row->speaker_photo,
					'institution' => $row->institution,
					'pos_institution' => $row->pos_institution
				 );

			}
		}
		return $data;
	}
	
}
