<!DOCTYPE html>
<html lang="en">

<head>

<?php
if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
        $panjangs = $_SESSION['screen_width'];
        $lebars = $_SESSION['screen_height'];
    }else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])){
        $_SESSION['screen_width'] = $_REQUEST['width'];
        $_SESSION['screen_height'] = $_REQUEST['height'];    
        $panjangs = $_SESSION['screen_width'];
        $lebars = $_SESSION['screen_height'];
    } else {
        echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?' . '&width="+screen.width+"&height="+screen.height;</script>';
    }
?>
<?php

    $panjangs = $_SESSION['screen_width'];
    $lebars = $_SESSION['screen_height'];
    if($lebars>1000 OR $panjangs>700){
    echo "
    <style>
   img{
    width: 18%;
    height: 18%;
   }

 @media only screen and (max-width: 700px){
    a {
        width: 100% !important;
        margin: 6px 0;
        height: 20%;
    }
    img {
        width: 23%;
        height: 20%;
        margin: 6px 0;
    }
    .logo{
        width: 45%;
        margin: 6px 0;
    }
    .intro-lead-in-judul-menu{
        font-size: 0.9em !important;
    }
    .intro-lead-in-tanggal-menu{
        font-size: 0.9em !important;    
    }
    .btn-xl{
        font-size: 0.7em !important;
    }
    .intro-heading{
        font-size: 2.3em !important;
    }
    
}
</style>
";} else{
    echo "<style>
    a{
        width: 75% !important;
    }
    img{
        width: 80% !important;
    }
    .logo{
        width: 25% !important;
       
    }
    .fa{
        width: auto !important;
    }
    </style>";

}
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INDOHUN</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/agency.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/adit_font.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/footer.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <?php $this->load->view('view_navigation'); ?>

    <!-- Header -->
    <header>
        <?php
        
                         
                          
        	//$name = $this 

        	/*$username = $this->session->userdata('username');
            $query  =mysql_query("SELECT * FROM user WHERE username='$username'");
            $tampil =mysql_fetch_array($query);
            $id = $_SESSION['id_user'];
            
            $query_event = mysql_query("SELECT e.name as nameevent FROM auserevent ue JOIN aevent e ON  ue.id_event = e.id_event JOIN auser u ON ue.id_user = u.id_user WHERE ue.id_user = $id order by ue.id_event");
            */
            
        ?>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">WELCOME </div>
                <div class="intro-heading"><?php echo $user;?> </div>
                <div class="intro-lead-in">Please select an event</div>

                <?php 
                //print_r($_SESSION['screen_width']);
                    $this->model_eventselection->geteventname($this->session->userdata('id_user'));

                 ?>


                <?php
                //while ($event = mysql_fetch_array($query_event)) {
                ?>                
                  <!--  <a href="ghtl.php?id_event_selected=1" class="page-scroll btn btn-xl"><?=$event['nameevent']?></a>    -->
                <?php
                //}
                ?>                    
                
            </div>
        </div>
    </header>

    
    <?php 
    $data['footerstat'] = 0;
    $this->load->view('view_footer', $data); ?>
     

    <!-- jQuery -->
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

</body>

</html>
