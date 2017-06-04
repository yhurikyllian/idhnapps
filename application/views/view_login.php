<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Whale Studio-INDOHUN</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/agency.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/logintheme.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/login_css.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <script type="text/javascript">
    function validateForm() {
        if (!$("#username").val()) {
            alert("Sorry username can not be empty")
            $("#username").focus();
            return false;
        };

        if (!$("#password").val()) {
            alert("Sorry password can not be empty")
            $("#password").focus();
            return false;
        };

    }

    </script>

    <style>
        h2 {text-align: center;}
    </style>
</head>

<body id="page-top" class="index">
    <?php if(isset($_GET['module']))
    include "$_GET[module].php";
    ?>


    <!-- Services Section -->
    <section id="services">
       <div class="login-wrap">
    <div class="login-html">
        <h2> <img src="<?php echo base_url();?>assets/img/system/logo200x121.png"> </h2>
        
    
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
            <form method="POST" action="<?php echo base_url();?>index.php/login/getlogin" onsubmit="return validateForm();" accept-charset="UTF-8">
                <div class="group">
                    <label for="user" name="username" class="label">Username</label>
                    <input id="username" type="text" name="username" class="input">
                </div>
                <div class="group">
                    <label for="pass" name="password" class="label">Password</label>
                    <input id="password" type="password" name="password" class="input" data-type="password">
                    <br>
                    <?php
                        $info = $this->session->flashdata('mismatch');

                        if (!empty($info)) {
                            echo $info;
                        }
                    ?>
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" name="Pilih" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
    </section>

    
    <!-- Portfolio Grid Section -->
    
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
