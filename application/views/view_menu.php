<!DOCTYPE html>
<html lang="en">

<?php
// if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
//         $panjangs = $_SESSION['screen_width'];
//         $lebars = $_SESSION['screen_height'];
//     }else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])){
//         $_SESSION['screen_width'] = $_REQUEST['width'];
//         $_SESSION['screen_height'] = $_REQUEST['height'];    
//         $panjangs = $_SESSION['screen_width'];
//         $lebars = $_SESSION['screen_height'];
//     } else {
//         echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?' . '&width="+screen.width+"&height="+screen.height;</script>';
//     }
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
        width: 23%;
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


<head>

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

    <?php $this->load->view('view_navigation');?>

    <!-- Header -->
    <header>
        <div class="container">

            <div class="intro-text-menu">
                <img class="logo" src="<?php echo base_url(); ?>assets/img/system/ghtl.png"> 
            </br> </br> </br>
            <div class="intro-lead-in-judul-menu">GHTL ONE HEALTH IN ACTION</div>
            <div class="intro-lead-in-tanggal-menu" >15-19 MAY 2017</div>

                 <?php
                    // 0 = big; 1 = small;
                    $footerstat = 0;
                //print_r($_SESSION['screen_width']);
                //session_start();
               
                if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
                    //echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
                    //print_r("asdadasdasdasas");
                    $lebars = $_SESSION['screen_width'];
                    $panjangs = $_SESSION['screen_height'];
                   // $lebars = $lebars;
                  //  $panjangs=$panjangs;
                    //unset($_SESSION['screen_width']);
                    //unset($_SESSION['screen_height']);
                    if($lebars>1200 || $panjangs>1000){
                        $footerstat = 0;
                        ?>
                <a href="<?php base_url();?>news" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_newsandupdate.jpg"></a>
                <a href="<?php base_url();?>agenda" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_agenda.jpg"></a>
                <a href="<?php base_url();?>information" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_generalinfo.jpg"></a>
                <a href="<?php base_url();?>speaker" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_speaker.jpg"></a>
                <br>
                <br>
                <a href="<?php base_url();?>setting" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_setting.jpg"></a>
                <a href="<?php base_url();?>document" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_documents.jpg"></a>
                <a href="<?php base_url();?>pollandsurvey" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_pollsandsurveys.jpg"></a>
                <a href="<?php base_url();?>attendees" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_attendees.jpg"></a>
            <?php
                    }else{
                        $footerstat = 1;
                        ?>
                        <a href="<?php base_url();?>news" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_newsandupdate.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>agenda" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_agenda.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>information" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_generalinfo.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>speaker" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_speaker.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>setting" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_setting.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>document" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_documents.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>pollandsurvey" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_pollsandsurveys.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>attendees" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_attendees.jpg"></a><figcaption>&nbsp</figcaption>
                <?php

                    }
                } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
                    $_SESSION['screen_width'] = $_REQUEST['width'];
                    $_SESSION['screen_height'] = $_REQUEST['height'];
                    //header('Location: ' . $_SERVER['PHP_SELF']);
                    $lebars = $_SESSION['screen_width'];
                   // $lebars = $lebars/2;
                    $panjangs = $_SESSION['screen_height'];
                    //$panjangs = $panjangs/2;
                    //unset($_SESSION['screen_width']);
                    //unset($_SESSION['screen_height']);
                     if($lebars>1200 || $panjangs>1000){
                        $footerstat = 0;
                        ?>
                <a href="<?php base_url();?>news" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_newsandupdate.jpg"></a>
                <a href="<?php base_url();?>agenda" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_agenda.jpg"></a>
                <a href="<?php base_url();?>information" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_generalinfo.jpg"></a>
                <a href="<?php base_url();?>speaker" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_speaker.jpg"></a>
                <br>
                <br>
                <a href="<?php base_url();?>setting" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_setting.jpg"></a>
                <a href="<?php base_url();?>document" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_documents.jpg"></a>
                <a href="<?php base_url();?>pollandsurvey" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_pollsandsurveys.jpg"></a>
                <a href="<?php base_url();?>attendees" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_attendees.jpg"></a>
            <?php
                    }else{
                        $footerstat = 1;
                        ?>
                    <a href="<?php base_url();?>news" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_newsandupdate.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>agenda" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_agenda.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>information" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_generalinfo.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>speaker" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_speaker.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>setting" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_setting.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>document" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_documents.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>pollandsurvey" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_pollsandsurveys.jpg"></a><figcaption>&nbsp</figcaption>
                <a href="<?php base_url();?>attendees" class="page-scroll btn btn-xl"> <img src="<?php echo base_url(); ?>assets/img/system/menu_attendees.jpg"></a><figcaption>&nbsp</figcaption>
                <?php

                    }
                 } else {
                    //print_r($panjangs);
                    $footerstat = 0;
                    ?><a href="<?php base_url();?>news" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_newsandupdate.jpg"></a>
                <a href="<?php base_url();?>agenda" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_agenda.jpg"></a>
                <a href="<?php base_url();?>information" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_generalinfo.jpg"></a>
                <a href="<?php base_url();?>speaker" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_speaker.jpg"></a>
                <br>
                <br>
                <a href="<?php base_url();?>setting" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_setting.jpg"></a>
                <a href="<?php base_url();?>document" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_documents.jpg"></a>
                <a href="<?php base_url();?>pollandsurvey" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_pollsandsurveys.jpg"></a>
                <a href="<?php base_url();?>attendees" style='max-width: 100%!important; height: auto!important; min-width: 5%!important; min-height: 5%!important; overflow: visible;'> <img src="<?php echo base_url(); ?>assets/img/system/menu_attendees.jpg"></a>
                <?php
                //print_r("adadasdasdsadas");
                     echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?'. '&width="+screen.width+"&height="+screen.height;</script>';
                }
?>
            </div>
        </div>
    </header>

    <?php 
    $data['footerstat'] = $footerstat;
    $this->load->view('view_footer', $data); ?>



                </div>
            </div>
        </div>
    </div>


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
