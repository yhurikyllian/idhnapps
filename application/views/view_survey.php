<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Indohun - Survey</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

	<!-- NProgress -->
	<link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Theme CSS -->
	<link href="<?php echo base_url();?>assets/css/custom.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/survey.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/css/adit_font.css" rel="stylesheet">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <![endif]-->

    </head>


    <body id="page-top" class="index">

    	<?php 
    	$content['title'] = "SURVEY";
    	$this->load->view('view_navigation_style2', $content); 

    	?>

    	<br /> <br /> <br /><br /><br /><br />
    	<section id="Speakers" class="bg-light-gray">
    		<div class="container">
    			<div class="row">

    				<!--letak konten-->  
    				<p>
    					<div class="col-md-12 col-sm-12 col-xs-12">
    						<div class="x_panel">
    							<div class="x_title">
    								<h2>Event Feedback <small>Survey</small></h2>
    								<ul class="nav navbar-right panel_toolbox">

    								</ul>
    								<div class="clearfix"></div>
    							</div>
    							<div class="x_content">

    								<!-- Smart Wizard -->
    								<form id="form-1" method="POST" action="<?php echo base_url();?>index.php/thanks"  accept-charset="UTF-8" data-parsley-validate>
    								<p>Please select option and fill the field for future event. Range 1-7 : 1(Not Good) to 7(Very Good)  </p>
    								<div id="wizard" class="form_wizard wizard_horizontal">
    									<ul class="wizard_steps">
    										<li>
    											<a href="#step-1">
    												<span class="step_no">1</span>
    												<span class="step_descr">
    													Part 1<br />
    													<small>Select 1 option</small>
    												</span>
    											</a>
    										</li>
    										<li>
    											<a href="#step-2">
    												<span class="step_no">2</span>
    												<span class="step_descr">
    													Part 2<br />
    													<small>Fill the field</small>
    												</span>
    											</a>
    										</li>
    										<li>
    											<a href="#step-3">
    												<span class="step_no">3</span>
    												<span class="step_descr">
    													Part 3<br />
    													<small>Select 1 option</small>
    												</span>
    											</a>
    										</li>
    										<li>
    											<a href="#step-4">
    												<span class="step_no">4</span>
    												<span class="step_descr">
    													Part 4<br />
    													<small>Fill the field</small>
    												</span>
    											</a>
    										</li>
    									</ul>
    									<div id="step-1">
    										<table class="table table-striped projects">
    											<thead>
    												<tr>
    													<th style="width: 2%">No</th>
    													<th style="width: 80%">Question</th>
    													<th style="width: 20%">Answer</th>
    												</tr>
    											</thead>
    											<tbody>
    												<div class="form-group">

    														<?php
    														$counter = 0;

    														$question = array("Overall, this was a worthwhile activity", 
    															"This event furthered my understanding of One Health",
    															"The event was well planned (communications and logistics went smoothly)",
    															"The event itself was well organized",
    															"This event met its stated objectives",
    															"The presenters were engaging and informative ",
    															"The length of the event was satisfactory",
    															"The location of the event was satisfactory");


    														for ($i=1; $i < 9; $i++) { 
    															?>
    															<tr>
    																<td><?php echo $i;?></td>
    																<td>
    																	<h4><?php echo $question[$i-1]?></h4>

    																</td>

    																<td>



    																	<select id="<?php echo 'answer'.$counter; $counter++;?>" name="sesi1-<?php echo $i;?>" class= "form-control" style="width: 100%">
    																		<?php 

    																		for ($j=1; $j < 8; $j++) { 
    																			?>
    																			<option <?php if($j==1){echo "selected=\"selected\"";};?> value="<?php echo $j;?>"><?php echo $j;?></option>
    																			<?php
    																		}

    																		?>

    																	</select>

    																</td>
    															</tr>
    															<?php




    														}


    														?>
    														<!-- </form> -->
    													</div>
                <!-- Yang manual

                        <tr>
                          <td><?php echo $i; $i++;?></td>
                          <td>
                            <h4>Overall, this was a worthwhile activity</h4>
                           
                          </td>
                          
                          <td>
                            <div class="form-group">
                              <select id="<?php $i=$i-1; echo 'answer'.$i; $i++;?>" class= "form-control" style="width: 100%">
                              <?php 
                                for ($j=1; $j < 8; $j++) { 
                              ?>
                                  <option value="Jawaban A"><?php echo $j;?></option>
                              <?php
                                }
                              ?>
                              </select>
                            </div>
                          </td>
                        </tr>
                    -->


                </tbody>
            </table>

        </div>

        <div id="step-2">
        	<div class="row">
        		<div class="col-md-12 col-sm-12 col-xs-12">
        			<div class="x_panel">

        				<div class="x_content">
        					<br />
        					<!-- <form action="<?php echo base_url();?>index.php/thanks" id="form-2" data-parsley-validate method="POST" class="form-horizontal form-label-left"> -->

        					<?php 
        					$question = array("What were the strengths of this event?",
        						"What can be done to improve this event?",
        						"Additional comments or suggestions (optional):");

        					for ($i=0; $i < 3 ; $i++) { 
        						?>
        						<label><?php echo $question[$i];?></label>
                                <label for="message">(20 chars min) :</label>
                                <!--<textarea id="<?php //echo 'answer'.$counter; $counter++; ?>" name="sesi2-<?php //echo $i+1;?>" required="required" class="form-control" name="message" data-parsley-trigger="keyup"
                                    data-parsley-validation-threshold="10"></textarea> -->

                                <textarea id="<?php echo 'answer'.$counter; $counter++; ?>" required="required" class="form-control" name="sesi2-<?php echo $i+1;?>" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment!" data-parsley-group="block1"
                            data-parsley-validation-threshold="5"></textarea>
        							<?php
        						}

        						?>

        						<!-- </form> -->
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div id="step-3">
        		<table class="table table-striped projects">
        			<thead>
        				<tr>
        					<th style="width: 2%">No</th>
        					<th style="width: 80%">Question</th>
        					<th style="width: 20%">Answer</th>
        				</tr>
        			</thead>
        			<tbody>
        				<!-- <form method="POST" action="<?php echo base_url();?>index.php/thanks" id="form-3" data-parsley-validate class="form-horizontal form-label-left"> -->
        				<?php
        				$question = array("This event met my personal expectations",
        					"This event was relevant to my current work",
        					"The information presented was new to me",
        					"I gained valuable knowledge or skills as a result of participating in this event",
        					"I would like to apply what I learned to my own work",
        					"I am currently able to apply what I learned to my work");

        				for ($i=1; $i < 7; $i++) { 
        					?>
        					<tr>
        						<td><?php echo $i; $counter++;?></td>
        						<td>
        							<h4><?php echo $question[$i-1]?></h4>

        						</td>

        						<td>
        							<div class="form-group">
        								<select name="sesi3-<?php echo $i;?>" class= "form-control" style="width: 100%">
        									<?php 
        									for ($j=1; $j < 8; $j++) { 
        										?>
        										<option value="<?php echo $j; ?>"><?php echo $j;?></option>
        										<?php
        									}
        									?>

        								</select>
        							</div>
        						</td>
        					</tr>
        					<?php
        				}

        				?>
        				<!-- </form> -->
        			</tbody>
        		</table>
        	</div>

        	<div id="step-4">
        		<div class="row">
        			<div class="col-md-12 col-sm-12 col-xs-12">
        				<div class="x_panel">

        					<div class="x_content">
        						<br />
        						<!-- <form id="form-4" action="<?php echo base_url();?>index.php/thanks" method="POST" data-parsley-validate class="form-horizontal form-label-left"> -->

        						<?php 
        						$question = array("What single most important lesson did you learn from this event? ",
        							"How was this event relevant to your professional development/current work?",
        							"Where did you know this event?",
        							"Additional comments or suggestions (optional):");

        						for ($i=0; $i < 4 ; $i++) { $counter++;
        							?>
        							<label for="message"><?php echo $question[$i];?></label>		
                                        <label for="message">(20 chars min) :</label>
                                <!--<textarea  name="sesi4-<?php echo $i+1;?>" id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup"
                                        data-parsley-validation-threshold="10"></textarea>-->

                                <textarea id="<?php echo 'answer'.$counter; $counter++; ?>" required="required" class="form-control" name="sesi4-<?php echo $i+1;?>" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment!" data-parsley-group="block1"
                            data-parsley-validation-threshold="5"></textarea>

        								<?php
        							}

        							?>
        							<textarea name="counter" style="display: none;" value="<?php echo $counter;?>"><?php echo $counter;?></textarea>
        						
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>

        </div>
        </form>
        <!-- End SmartWizard Content -->
    </div> </div> </div>

</div>  
</div>
</section>





<?php 
    $data['footerstat'] = 0;
    $this->load->view('view_footer', $data); ?>

<script src="<?php echo base_url();?>assets/vendors/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url();?>assets/js/agency.min.js"></script>

<!-- FastClick -->
<script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>

<!-- jQuery Smart Wizard -->
<script src="<?php echo base_url();?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<script src="<?php echo base_url();?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
<!-- Theme JavaScript -->
<script src="<?php echo base_url();?>assets/js/agency.min.js"></script>

<script type="text/javascript">
	(function($){

// Default Properties and Events
$.fn.smartWizard.defaults = {
    selected: 0,  // Selected Step, 0 = first step
    keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
    enableAllSteps: false,
    transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
    contentURL:null, // content url, Enables Ajax content loading
    contentCache:true, // cache step contents, if false content is fetched always from ajax url
    cycleSteps: false, // cycle step navigation
    enableFinishButton: false, // make finish button enabled always
  hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead?
    errorSteps:[],    // Array Steps with errors
    labelNext:'Next',
    labelPrevious:'Previous',
    labelFinish:'Finish',
    noForwardJumping: false,
    onLeaveStep: null, // triggers when leaving a step
    onShowStep: null,  // triggers when showing a step
    onFinish: onFinishCallback

    

    /*onFinish: function () { 
      
      document.location = "thanks";
  } */
};

//harusnya gak ada
jQuery.ajax({
	type: "POST",
	url: 'ajax_survey.php',
	dataType: 'json',
	data: {functionname: 'apply'},

	success: function (obj, textstatus) {
		if( !('error' in obj) ) {
			yourVariable = obj.result;
			$('#wizard').smartWizard('showMessage',yourVariable);
		}
		else {
			console.log(obj.error);
		}
	}
});

function onFinishCallback(){

	document.getElementById('form-1').submit();
        // document.getElementById('form-2').submit();
        // document.getElementById('form-3').submit();
        // document.getElementById('form-4').submit();
        //document.location = "thanks";

        

    } 

})(jQuery);




</script>

</body>

</html>


