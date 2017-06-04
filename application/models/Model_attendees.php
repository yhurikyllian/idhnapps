<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_attendees extends CI_Model {

	public function getattendees($id, $search="") {
    if ($search!==""){
      $search = "%".$search . "%";
      $query = $this->db->query("SELECT *, u.name as nameuser FROM  userproject up JOIN project p ON  up.activity_code = p.activity_code JOIN user u ON up.id_user = u.id_user WHERE up.activity_code = '$id' AND u.name LIKE '$search' GROUP BY u.id_user ORDER BY u.id_user");
      //print_r("asdasdsadasdsad");
      //unset($search);
    } else {
      $query = $this->db->query("SELECT *, u.name as nameuser FROM  userproject up JOIN project p ON  up.activity_code = p.activity_code JOIN user u ON up.id_user = u.id_user WHERE up.activity_code = '$id' order by up.activity_code");
    }


    
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {

      /*$content[$i]['id_news'] = $row->id_news;
      $content['title'] = $row->title;
      $content['content'] = $row->content;
      $content['post_date'] = $row->post_date;
      $content['image'] = $row->image; */
      
      echo '
      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            
                            <div class="left col-xs-7">
                              <h2>', $row->nameuser,'</h2>
                              <p>', $row->institution,' </p>
                                <p>', $row->pos_institution,'</p>
                                <p>', $row->email,'</p>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="', base_url()."assets/".$row->user_photo,'" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            
                            <div class="col-xs-12 col-sm-12 emphasis">
                              <a href="maintenance">
                              <a href="mailto:', $row->email, '"> 
                                <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-comments-o"></i> Send Mail</button>
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
