<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_news_detail extends CI_Model {

	public function getnews() {
		$this->db->where('id_news', $_GET['id']);
		$query = $this->db->get('news');

		if($query->num_rows() > 0) {

			foreach ($query->result() as $row) {
				$content['news_title'] = $row->title;
				$content['content'] = $row->content;
				$content['post_date'] = $row->post_date;
				$content['image'] = "assets/".$row->image;
				//$this->load->view('view_news_detail', $content);
			}
		}

		return $content;
	}


		
	
}
