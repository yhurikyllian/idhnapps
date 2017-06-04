      <!--tiemline area start-->
            <div id="timeline"class="tiemline-area ptb100">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="clearfix"></div>
                            <div class="tab-menu-list tml-02 mb50 text-center">
                                <ul class="nav timeline-tab" role="tablist">
                                  <li role="presentation" class="active"><a href="#day-02-nol" aria-controls="day-02-one" role="tab" data-toggle="tab">Day 0</a></li>  
                                  <?php
                                  	//$id = $_GET['id_event_selected'];
                                    $id = $this->session->userdata('id_event');

                                    $word_num = array('1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five', '6'=>'six', '7'=>'seven', '8'=>'eight', '9'=>'nine', '0'=>'nol');
                                    $num_day = $this->model_agenda_content->getnumday($id);
                                    if($num_day > 1) {
                                      for ($i=1; $i <= $num_day; $i++) { 

                                  ?>
                                  <li role="presentation"><a href="#day-02-<?=$word_num[$i];?>" aria-controls="day-02-<?=$word_num[$i];?>" role="tab" data-toggle="tab">Day <?=$i;?> </a></li>                                          
                                  <?php  
                                      }
                                    }
                                  ?>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <!-- Tab panes -->
                            <div class="tab-content">

                            	
                              	<?php
                              		$this->model_agenda_content->getevent($word_num, $num_day, $id);
                                  
                               	?>
                                          
                            </div>
                        </div>
                    </div>    
                </div>
                    </div>
            </div>
       




           