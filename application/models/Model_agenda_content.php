<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_agenda_content extends CI_Model {

	public function getnumday($id) {
        
  		$this->db->select('start_date');
        $this->db->select('end_date');
		$this->db->where('activity_code', $id);
		$query_num_day = $this->db->get('project');

		if($query_num_day->num_rows() > 0) {

			foreach ($query_num_day->result() as $row) {
                $sd = strtotime($row->start_date);
                $ed = strtotime($row->end_date);
                $datediff = $ed - $sd;

				$num_day = floor($datediff / (60*60*24));
			}
		}
        
		return $num_day;
	}

	public function getevent($word_num, $num_day, $id) {
        $dir_photo = get_speaker_photo_150();
        for ($i=0; $i <= $num_day; $i++) {  
            $day = "Day ".$i;
            //$query = $this->db->query("SELECT *, e.name as nameevent, sp.name as namespeaker FROM aschedule sc JOIN aevent e ON  sc.id_event = e.id_event JOIN aspeaker sp ON sc.id_speaker = sp.id_speaker WHERE sc.id_event = $id and sc.day = '$day' order by sc.id_event");
            $query = $this->db->query("SELECT *, sp.name as namespeaker FROM session se JOIN project pr ON  se.activity_code = pr.activity_code JOIN speaker sp ON se.id_speaker = sp.id_speaker WHERE se.activity_code = '$id' and se.session_day = '$day' order by se.session_time");
            
            $k = 0;
            if($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[$k]['day'] = $row->session_day;
                	$data[$k]['project_title'] = $row->project_title;
                    $data[$k]['activity_name'] = $row->activity_name;
                    $data[$k]['type_session'] = $row->type_session;
                    $data[$k]['session_time'] = $row->session_time;
                    $data[$k]['session_title'] = $row->session_title;
                    //$data[$k]['category'] = $row->category;
                    $data[$k]['session_venue'] = $row->session_venue;
                    $data[$k]['session_date'] = $row->session_date;
                    $data[$k]['namespeaker'] = $row->namespeaker;
                    $data[$k]['speaker_photo'] = $dir_photo.$row->speaker_photo;
                    $data[$k]['id_speaker'] = $row->id_speaker;

                    $k++;
				}
			} 
			
            if($i == 0){
            	echo '<div role="tabpanel" class="tab-pane fade in active" id="day-02-', $word_num[$i],'"> 
                  		<div class="total-timeline">';				                               
            } else {
                echo '<div role="tabpanel" class="tab-pane fade in" id="day-02-', $word_num[$i],'"> 
                        <div class="total-timeline">';				           
			}

			for ($j=0; $j<count($data); $j++) {                                     
                if (strcmp($data[$j]['day'], $day) == 0) {      
                    if ($data[$j]['namespeaker'] != "Panitia" && $data[$j]['namespeaker'] != "TNI") { 
                        $nmspeaker = '<h5>Speaker: <a href="speakerprofile?id=' .$data[$j]['id_speaker']. '">'.$data[$j]['namespeaker'].'</a></h5> ';  

                        
                        
                    } else {                        
                        $nmspeaker = '<h5>Speaker: '.$data[$j]['namespeaker'].'</h5> ';          
                    }

                	echo ' 
                        <!--single timeline start-->
                        <div class="single-timeline shadow-box">
                            <div class="timeline-left">
                        	    <br>
                                <br>
                                <h4>', $data[$j]['session_venue'],'</h4>
                            </div>
                            <div class="timeline-right">
                                <div class="timeline-img">
                                    <img src="', base_url().$data[$j]['speaker_photo'],'" alt="">
                                </div>
                        	    <div class="timeline-content">
                                    <div class="timeline-top">
                                        
                                            <p>', $data[$j]['session_time'],'  |  ', $data[$j]['session_date'],'</p>
                                            
                                         
                                    </div>
                                    <h4>', $data[$j]['session_title'],'</h4>
                                    <p>', $data[$j]['type_session'],'</p>
                                    ', $nmspeaker ,'
                                    
                                </div>
                            </div>
                        </div>
                        <!--single timeline end-->  
                    '; 
                } //if                                    
            } //for
            echo '</div> </div>';        
		}
		
	}
		
	
}


                            