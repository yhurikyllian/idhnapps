<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indohun - Live Poll</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/survey.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>


<body id="page-top" class="index">

    <?php 
        $content['title'] = "SPEAKER";
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
                    <h2>Live Polling <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <div class="container">
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class=" glyphicon glyphicon-circle-arrow-right"></span> <?php echo $this->model_polling->getquestion();?> <a href="http://www.jquery2dotnet.com" target="_blank"><span
                            class="glyphicon "></span></a>
                    </h3>
                </div>

                <div class="panel-body">
                    <ul class="list-group">

                        <?php
                            $num = $this->model_polling->getnumanswer();
                            for ($i=0; $i < $num ; $i++) { 
                                $id = $this->model_polling->getid_answer($i);
                                $answer = $this->model_polling->getanswer($i);
                                echo '
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="', $id, '" value="', $answer, '">
                                                ', $answer; '
                                            </label>
                                        </div>
                                    </li>
                                ';
                            }
                        ?>
                      
                    </ul>
                </div>
                <script type="text/javascript">
                    function validaterb() {                        
                        var rates = document.getElementsByName('optionsRadios');
                        var rate_value;
                        var selected_rb = {};
                        for (var i = 0; i < rates.length; i++) {
                            if(rates[i].checked) {
                                selected_rb["id"] = rates[i].id;
                                selected_rb["value"] = rates[i].value;
                                return selected_rb;
                            }
                        };

                        
                    }
                </script>
                
                <div class="panel-footer">
                    <a href="<?php echo base_url();?>index.php/polling/vote"><button type="button" onclick="validaterb();" class="btn btn-primary btn-sm">
                        Vote</button></a>
                </div>
            </div>
        </div>
        
    </div>
</div>


      </div> </div> </div>

      </div>  
    </div>
</section>

 
  <?php $this->load->view('view_footer'); ?>

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


