<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	// menu speaker photo
	function get_speaker_photo_128() {
		$speaker_photo = "assets/img/speaker/128x128/";
		return $speaker_photo;
	}

	// menu agenda photo
	function get_speaker_photo_150() {
		$speaker_photo_agenda = "assets/img/speaker/150x150/";
		return $speaker_photo_agenda;
	}

	// speaker content photo
	function get_speaker_photo_220() {
		$speaker_photo = "assets/img/speaker/220x220/";
		return $speaker_photo;
	}	

	// document files
	function get_document_link() {
		$doc = "assets/files/";
		return $doc;
	}

?>