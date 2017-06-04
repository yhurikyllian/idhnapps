<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indohun - Agenda</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

        
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
        <!-- icofont css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icofont.css">
        <!-- Nivo css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo-slider.css">
        <!-- animaton text css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate-text.css">
        <!-- Metrial iconic fonts css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/material-design-iconic-font.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
        <!-- color css -->
        <link href="<?php echo base_url();?>assets/css/skin-default.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/agency_edit_min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/adit_font.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <div class="wrapper event-schedule">

    <?php 
        $content['title'] = "AGENDA";
        $this->load->view('view_navigation_style2', $content); 

    ?>


    
    <!-- About Section -->
    <section id="Newsandupdate">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12" align="left">
				<div class="row-fluid">  
		  <div class="span9">  
           <!--letak konten-->  

            <?php  
            	$this->load->view('view_agenda_content', $content);   
     		?>  
    </div><!--/span-->  
    </div><!--/row-->
                    
                </div>
            </div>
        </div>
    </section>

    
    <?php 
    $data['footerstat'] = 0;
    $this->load->view('view_footer', $data); ?>

    
</div>
    <!--==== all js here====-->
        <!-- owl.carousel js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/jquery.meanmenu.js"></script>
        <!-- Nivo js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/nivo-slider/nivo-active.js"></script>
        <!-- wow js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/wow.min.js"></script>
        <!-- Youtube Background JS -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- datepicker js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/bootstrap-datepicker.js"></script>
        <!-- waypoint js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/waypoints.min.js"></script>
        <!-- onepage nav js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/jquery.nav.js"></script>
        <!-- animate text JS -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/animate-text.js"></script>
        <!-- plugins js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/plugins.js"></script>
        <!-- main js -->
        <script src="<?php echo base_url();?>assets/vendors/sparkk/js/main.js"></script>

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
