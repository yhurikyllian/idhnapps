<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_speaker extends CI_Model {

	public function getspeaker($search="") {
		$id = $this->session->userdata('id_event');
		if ($search!==""){
			$search = "%".$search . "%";
			$query = $this->db->query("SELECT sp.institution, sp.name, sp.disciplinary, sp.pos_institution, sp.email, sp.speaker_photo, sp.id_speaker FROM session ss JOIN speaker sp ON ss.id_speaker = sp.id_speaker WHERE ss.activity_code = '$id' AND sp.name LIKE '$search' GROUP BY ss.id_speaker ORDER BY ss.id_speaker");
			//print_r("asdasdsadasdsad");
			//unset($search);
		}else{
		$query = $this->db->query("SELECT sp.institution, sp.name, sp.disciplinary, sp.pos_institution, sp.email, sp.speaker_photo, sp.id_speaker FROM session ss JOIN speaker sp ON ss.id_speaker = sp.id_speaker WHERE ss.activity_code = '$id' GROUP BY ss.id_speaker ORDER BY ss.id_speaker");
		//print_r("gagal");
	}
		//$this->load->helper('globalvar_helper');
		$dir_photo = get_speaker_photo_128();
		if($query->num_rows() > 0) {

			foreach ($query->result() as $row) {
				if($row->name != "Panitia" && $row->name != "TNI") {
					echo '
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
	                        <div class="well profile_view">
	                          <div class="col-sm-12">
	                            
	                            <div class="left col-xs-7">
	                              <h2>', $row->name,'</h2>
	                              <p>', $row->institution,' </p>
	                              <p>', $row->pos_institution,'</p>
	                              <p>', $row->email,'</p>	                             
	                            </div>
	                            <div class="right col-xs-5 text-center">
	                              <img src="', base_url().$dir_photo.$row->speaker_photo,'" alt="" class="img-circle img-responsive">
	                            </div>
	                          </div>
	                          <div class="col-xs-12 bottom text-center">
	                          	<div class="col-xs-12 col-sm-4 emphasis">
	                              <p class="ratings">
	                                <a>4.0</a>
	                                <a href="#"><span class="fa fa-star"></span></a>
	                                <a href="#"><span class="fa fa-star"></span></a>
	                                <a href="#"><span class="fa fa-star"></span></a>
	                                <a href="#"><span class="fa fa-star"></span></a>
	                                <a href="#"><span class="fa fa-star-o"></span></a>
	                              </p>
	                            </div>
	    
	                            <div class="col-xs-12 col-sm-8 emphasis">
	                              <a href="mailto:', $row->email, '"> 
	                              	<button type="button" class="btn btn-success btn-xs"> 
	                              		<i class="fa fa-user"></i> 
	                                	<i class="fa fa-comments-o"></i> 
	                                	Send Mail
	                                </button>
	                              </a>
	                              <a href="',base_url(),'index.php/speakerprofile?id=', $row->id_speaker,'">
	                                <button type="button" class="btn btn-primary btn-xs">
	                                  <i class="fa fa-user">  </i> View Profile
	                                </button>
	                              </a>
	                            </div>
	                          </div>
	                        </div>
	                      </div>
				';
				}
				

			}
		}
		  
	}
	


}



 
                          
                    

                   