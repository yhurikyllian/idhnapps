<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indohun - Attendees</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/adit-contact.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/adit_font.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <style type="text/css">
      .right_col {
          min-height: 0px!important;
      }
    </style>

</head>


<body id="page-top" class="index">
    <?php 
        $content['title'] = "ATTENDEES";
        $this->load->view('view_navigation_style2', $content); 
        
    ?>

<section id="Speakers" class="bg-light-gray">
    <div class="container">
      <div class="row">

        <!--letak konten-->  
        

        <!-- page content -->
        <div class="right_col" role="main" >
          <div class="">
            

            <div class="clearfix"></div>

<div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                            <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
                              <div class="input-group">
                                <input id="search" type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                  <button onclick="searchname()" class="btn btn-default" type="button">Go!</button>
                                </span>
                              </div>
                            </div>

                            <!-- <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <ul class="pagination pagination-split">
                                  <li><a href="#">A</a></li>
                                  <li><a href="#">B</a></li>
                                  <li><a href="#">C</a></li>
                                  <li><a href="#">D</a></li>
                                  <li><a href="#">E</a></li>
                                  <li>...</li>
                                  <li><a href="#">W</a></li>
                                  <li><a href="#">X</a></li>
                                  <li><a href="#">Y</a></li>
                                  <li><a href="#">Z</a></li>
                                </ul>   
                            </div> -->

                       </div>
                      

                      
                      <div class="clearfix"></div>

                      

                    <?php
                      if(isset($nama)){
                        $this->model_attendees->getattendees($id, $nama);                        
                       // print_r($nama);
                      }else{
                        $this->model_attendees->getattendees($id);                        
                      }
                        
                    ?>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->   
      </div>  
    </div>
</section>

<script type="text/javascript">
  function searchname(){
    var nama = document.getElementById("search").value;
    window.location.href = "<?php echo base_url(); ?>index.php/attendees/index/"+nama;
  }
</script>

 
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

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/agency.min.js"></script>

</body>

</html>
