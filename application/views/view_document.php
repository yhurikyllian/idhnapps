<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indohun - Documents</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendors//font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

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
        $content['title'] = "DOCUMENTS";
        $this->load->view('view_navigation_style2', $content); 

    ?>

    

    <?php  
        //include "koneksi.php";  
        //$query_all = mysql_query("SELECT * FROM aschedule sc JOIN adocument d ON sc.id_document = d.id_document JOIN speakers sp ON sc.id_speakers = sp.id_speakers order by sc.id_document");
        //$query_doc = mysql_query("SELECT COUNT(*) FROM adocument");
        //$data = mysql_fetch_array($query_all);
        //$total = mysql_fetch_array($query_doc);

    ?>

    <section id="document">
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      
                      <br />
                      

                      <div>

                        
                        <!-- end of user messages -->
                        <ul class="messages">

                        <?php
                        
                        //ho count($data);
                          //while ($data = mysql_fetch_array($query_all)) {

                        $this->model_document->getdocument();
                            
                        ?>
                          
                          
                        </ul>
                        
                      </div>


                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                       

                      </section>

                    </div>
                    <!-- end project-detail sidebar -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
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
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>

</body>

</html>
