<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_document extends CI_Model {

	public function getquery() {
		$id = $this->session->userdata('id_event');
		$query = $this->db->query("SELECT ss.session_title, ss.type_session, d.file_name, d.file_link, d.num_download, sp.speaker_photo FROM session ss JOIN document d ON ss.id_document = d.id_document JOIN speaker sp ON ss.id_speaker = sp.id_speaker WHERE ss.activity_code = '$id' order by ss.id_document");

		return $query;
	}

	public function getquery2() {
		$query = $this->db->query("SELECT * FROM document ORDER BY id_document");

		return $query;	
	}

	public function getdocument() {
		$query = $this->getquery2();
		$dir_photo = get_speaker_photo_128()."/none.jpg";
		$dir_doc = get_document_link();

		foreach ($query->result() as $row) {			
			echo '
			<li>
                            <img src="', base_url().$dir_photo,'" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">2017</h3>
                              
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">', $row->file_name, '</h4>
                              <blockquote class="message">', $row->description, '</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="', base_url().$dir_doc.$row->file_link, '"><i class="fa fa-paperclip"></i> ', $row->file_name, ' </a>
                              </p>
                            </div>
                          </li>

             ';
		}
	}

	public function getdocumentold() {
		$query = $this->getquery();
		$dir_photo = get_speaker_photo_128();
		$dir_doc = get_document_link();

		foreach ($query->result() as $row) {			
			echo '
			<li>
                            <img src="', base_url().$dir_photo.$row->speaker_photo,'" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">2017</h3>
                              <p class="month">May</p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">', $row->session_title, '</h4>
                              <blockquote class="message">', $row->type_session, '</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="', base_url().$dir_doc.$row->file_link, '"><i class="fa fa-paperclip"></i> ', $row->file_name, ' </a>
                              </p>
                            </div>
                          </li>

             ';
		}
	}

	public function gettotaldoc() {
		$query = $this->getquery();

		return $query->num_rows();
	}

	public function gettotaldownload() {
		$query = $this->getquery();
		$counter = 0;
		foreach ($query->result() as $row) {
			 $counter = $counter + $row->num_download;
                         
		}

		return $counter;	
	}
	
}
