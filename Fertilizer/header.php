<?php 
    session_start();
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
<!-- Mirrored from event-theme.com/themes/html/naturix-html/404.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2017 05:31:39 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="agency, ecommerce">
        <meta name="author" content="Md. Siful Islam, Jtheme">
        <meta name="google-signin-client_id" content="YOUR_667927687117-d95l8vbfavor4ifhqhvdtrtas2ngvahv.apps.googleusercontent.com">
      
        <title>H.R. Fertilizer Shop</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- Font Icon -->
        <link href="assets/css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">  

        <!-- CSS Global -->
        <link href="assets/css/plugin/bootstrap.min.css" rel="stylesheet" type="text/css">  
        <link href="assets/css/plugin/bootstrap-select.min.css" rel="stylesheet" type="text/css">  
        <link href="assets/css/plugin/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="assets/css/plugin/animate.css" rel="stylesheet" type="text/css"> 
        
        <!-- Custom CSS -->
        <link href="assets/css/theme.css" rel="stylesheet" type="text/css">

        <!-- Color CSS --> 

        <!--[if lt IE 9]>
        <script src="assets/js/plugin/html5shiv.js"></script>
        <script src="assets/js/plugin/respond.js"></script>
        <![endif]-->        
    </head>

    <body id="home" class="wide">

        <!-- WRAPPER -->
        <main class="wrapper"> 
            <!-- CONTENT AREA -->

            <!-- Main Header Start -->
            <header class="main-header">
                <div class="container-fluid rel-div">
                    <div class="col-lg-4 col-sm-8">
                        <div class="main-logo">
                            <a href="index-2.php"> <img alt="" src="assets/img/logo/farm-food.jpg" />  </a>
                            <span class="medium-font">Fertilizer STORE</span>
                        </div>
                    </div>

                    <div class="col-lg-6 responsive-menu">
                        <div class="responsive-toggle fa fa-bars"> </div>
                        <nav class="fix-navbar" id="primary-navigation">
                            <ul class="primary-navbar">
                                <li class="dropdown active">
                                    <a href="index.php"  role="button" aria-haspopup="true" >

Home</a>

                                </li>
                                <li><a href="../Rental/index.php">Rental Instruments</a></li>
                                
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="login.php">      <?php
                                            if (isset($_SESSION['name_1'])) {
                                                echo $_SESSION['name_1'];
                                            }
                                            ?>       <img alt="" src="assets/img/icons/index.png" /></a></li>
                              
                            </ul>
                            </nav>
                    </div>
                  

                    <div class="col-lg-2 col-sm-4 cart-megamenu">
                        <div class="cart-hover">
                            <a href="#"> <img alt="" src="assets/img/icons/cart-icon.png" /> </a>
                            <span class="cnt crl-bg"><?php
                            if(isset($_SESSION['name_id'])) {
                                   $server = "localhost";
                                   $user = "root";
                                   $pass = "";
                                   $data = "agriculture";
                                   $conn_2 = mysqli_connect($server, $user, $pass,$data);
    $temp = array();
    $select_query = "SELECT * FROM cart where user_id='".$_SESSION['name_id']."' ";
    $select_res = mysqli_query($conn_2, $select_query);
    $test=mysqli_num_rows($select_res);
    //$test=2;
    echo $test;
    }?></span> 
                            <ul class="pop-up-box cart-popup">
                                
                                <li class="cart-list buttons">
                                    <div class="pull-left">
                                        <a href="cart.php" class="theme-btn-sm-2">View Cart</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="checkout.php" class="theme-btn-sm-3"> Checkout </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        
                </div>
            </header>
