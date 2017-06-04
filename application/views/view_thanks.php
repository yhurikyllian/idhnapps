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
        $content['title'] = "INDOHUN";
        $this->load->view('view_navigation_style2', $content); 
            
            $count = $_POST['counter'];
            $counter=-1;
            $sesi= array();
            for($j=1;$j<$count;$j++){
                    //print_r($_POST['sesi1-'.$j]."asdasdasdasdsad");
                        if(isset($_POST['sesi1-'.$j])){
                            $counter++;
                            $sesi[$counter] = $_POST['sesi1-'.$j];
                            
                            
                        }else{
                            break;
                        }
                    }
            //$sesi2= array();
            for($j=1;$j<$count;$j++){
                        if(isset($_POST['sesi2-'.$j])){
                            $counter++;
                            $sesi[$counter] = $_POST['sesi2-'.$j];
                            
                        }else{
                            break;
                        }
                    }
           // $sesi3= array();
            for($j=1;$j<$count;$j++){
                        if(isset($_POST['sesi3-'.$j])){
                            $counter++;
                            $sesi[$counter] = $_POST['sesi3-'.$j];
                            
                        }else{
                            break;
                        }
                    }
           // $sesi4= array();
            for($j=1;$j<$count;$j++){
                        if(isset($_POST['sesi4-'.$j])){
                            $counter++;
                            $sesi[$counter] = $_POST['sesi4-'.$j];
                            
                        }else{
                            break;
                        }
                    }
                    $un = $_SESSION['username'];

                    $query = $this->db->query("SELECT gender, country, type_institution, pos_institution, job, area_of_work, disciplinary  FROM `user` WHERE `username` = '$un'");
                    
                    if($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                            $gender = $row->gender;
                            $country = $row->country;
                            $type = $row->type_institution;
                            $pos = $row->pos_institution;
                            $job = $row->job;
                            $area = $row->area_of_work;
                            $disciplinary = $row->disciplinary;
            }
        }

                  $data = array(
                    'gender'=>$gender,
                    'country'=>$country,
                    'type_institution'=> $type,
                    'pos_institution'=>$pos,
                    'occupation'=>$job,
                    'area_of_work'=>$area,
                    'disciplinary'=>$disciplinary,
                    'q1'=>$sesi[0],
                    'q2'=>$sesi[1],
                    'q3'=>$sesi[2],
                    'q4'=>$sesi[3],
                    'q5'=>$sesi[4],
                    'q6'=>$sesi[5],
                    'q7'=>$sesi[6],
                    'q8'=>$sesi[7],
                    'q9'=>$un.'|||'.$sesi[8],
                    'q10'=>$sesi[9],
                    'q11'=>$sesi[10],
                    'q12'=>$sesi[11],
                    'q13'=>$sesi[12],
                    'q14'=>$sesi[13],
                    'q15'=>$sesi[14],
                    'q16'=>$sesi[15],
                    'q17'=>$sesi[16],
                    'q18'=>$sesi[17],
                    'q19'=>$sesi[18],
                    'q20'=>$sesi[19],
                    'q21'=>$sesi[20],
                    'activity_code'=>"IN2.1.1"
                    );
                    
                    $this->db->insert('survey', $data);

        
        

    ?>

<br /> <br /> <br /><br /><br /><br />

<div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center">
              <h1 class="error-number">Thank You</h1>
              <h2>Please click link below to back to main menu.</h2>
              <p>
              </p>
              <div class="mid_center">
              <a href="<?php echo base_url();?>index.php/menu" class="page-scroll btn btn-xl"> Back to Main Menu </a>

              
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>


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
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/agency.min.js"></script>

</body>

</html>


