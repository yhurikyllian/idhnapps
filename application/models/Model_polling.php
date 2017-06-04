<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_polling extends CI_Model {


	public function getcontent() {
		$query = $this->db->query("SELECT * FROM pollanswer pa JOIN poll p ON pa.id_poll = p.id_poll JOIN answer a ON pa.id_answer = a.id_answer WHERE p.status = 1 order by pa.id_answer");
		$i = 0;
		$content = -1;
		foreach ($query->result() as $row) {
			$content[$i]['question'] = $row->question;
			$content[$i]['id_answer'] = $row->id_answer;	
			$content[$i]['answer'] = $row->answer;	
			$content[$i]['value'] = $row->value;
			$i++;
		}
		return $content;
	}

	public function getquestion() {
		$content = $this->getcontent();
		return $content[0]['question'];
	}

	public function getid_answer($i) {
		$content = $this->getcontent();

		return $content[$i]['id_answer'];
	}

	public function getanswer($i) {
		$content = $this->getcontent();

		return $content[$i]['answer'];
	}

	public function getnumanswer() {
		$content = $this->getcontent();
		return count($content);
	}

	public function getstatus() {
		$content = $this->getcontent();

		if ($content<0) {
			return 0;
		} else {
			return 1;
		}
		
	}

	public function vote($id, $value1) {
		$value2 = $value1 + 1;
		$this->db->query("UPDATE answer SET value=$value2 WHERE id_answer=$id");
		redirect('menu');
	}
	
	
}
