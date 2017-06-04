<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_news extends CI_Model {

	public function getnews() {
		$query = $this->db->query("SELECT * FROM news ORDER BY id_news");

		foreach ($query->result() as $row) {
			$content['id_news'] = $row->id_news;
			$content['title'] = $row->title;
			$content['trim'] = $row->trim;
			$content['content'] = $row->content;
			$content['post_date'] = $row->post_date;
			$content['image'] = "assets/".$row->image;
			$this->load->view('view_news_headline', $content);
		}
		
	}
	
}
