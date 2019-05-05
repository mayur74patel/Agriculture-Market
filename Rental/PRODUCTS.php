<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$data2 = array();
$data2 =getAllrental_vehicleData();

$data = array();
$data = getAllrental_vehicle_dealerData();

if(isset($_POST['category'])&&$_POST['category']!='ALL')
{
	
	$data=getAllrental_vehicle_dealer_categoryData($_POST['category']);
}
else{
	
$data = getAllrental_vehicle_dealerData();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="agency, ecommerce">
        <meta name="author" content="Mayur Patel">

        <title>Agriculture</title>

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
        <link href="assets/css/plugin/jquery-ui.min.css" rel="stylesheet" type="text/css"> 

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
                            <a href="#"> <img alt="" src="images/logo.png" />  </a>
                            <span class="medium-font">કૃષિ સાધન  સંગ્રહ</span>
                        </div>
                    </div>

                    <div class="col-lg-6 responsive-menu">
                        <div class="responsive-toggle fa fa-bars"> </div>
                        <nav class="fix-navbar" id="primary-navigation">
                            <ul class="primary-navbar">
                                <li class="dropdown active">
                                    <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home</a>

                                </li>
                                <li><a href="page-about.php">About Us</a></li>
                                <li class="dropdown">
                                    <a href="PRODUCTS.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Shop</a>

                                </li>
                                <li><a href="partners.php">partners</a></li>
                                       
                                <li><a href="page-contact.php">Contact Us</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- / Main Header Ends -->

            <!--Breadcrumb	 Section Start-->
            <section class="breadcrumb-bg">                
                <div class="theme-container container ">                       
                    <div class="site-breadcumb white-clr">                        
                        <h2 class="section-title"> <strong class="clr-txt">કૃષિ </strong> <span class="light-font">દુકાન </span> </h2>
                        
                    </div>  
                </div>
            </section>
            <!--Breadcrumb Section End-->


            <!-- Shop Starts-->
            <section class="shop-wrap sec-space-bottom">
                <div class="pattern"> 
                    <img alt="" src="assets/img/icons/white-pattern.png">
                </div>

                <div class="container rel-div">
                    <div class="row sort-bar">
                        <div class="icon"> <img alt="" src="assets/img/logo/logo-2.png" /> </div>
                        
						<div class="col-lg-6">
 <form action="#" method="post">
									                        
						<div class="sort-dropdown">
                                <span>SORT BY</span>
                                <div class="search-selectpicker selectpicker-wrapper">
                                   <select name="category"class="selectpicker input-price"  data-width="100%"
                                            data-toggle="tooltip">
											<option value="ALL">ALL</option>
                                        <?php
							if (!empty($data2)) {
										foreach ($data2 as $val) 
								{
									echo "<option value=" .$val['rental_vehicle_name']. ">" .$val['rental_vehicle_name']. "</option>";
							}
							}
							?>
                                    </select>

															
								
                                </div>
                            </div>
							<input type="submit" name="cat" class="btn">
							
                        </div>
                           
                            <form>
                        
                    </div> 

                    <div class="divider-full-1"></div>

                    <div class="result-bar block-inline">
                        <h4 class="result-txt">search result <b> 125 </b> </h4>
                        <ul class="view-tabs">
                            <li class="active">
                                <a href="#grid-view" data-toggle="tab">                                                    
                                    <i class="fa fa-th"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="#list-view" data-toggle="tab">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content shop-content">
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            <div class="row"> 
							
							<?php
							if (!empty($data)) {
										foreach ($data as $val) 
								{
							?>
                                <div class="col-lg-3 col-md-4 col-sm-6"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="" />     
                                            <img class="shape" alt="" src="<?php echo "../images/" . $val['rental_user_vehicle_image']; ?>" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#<?php echo($val['iCategoryID']);?>" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"></span>  <strong><?php echo($val['rental_user_vehicle_type']);?></strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt"><?php echo($val['rental_user_vehicle_rate']);?> </strong> <del class="light-font"><?php echo($val['rental_user_vehicle_rate']+50);?> </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		<section class="modal fade" id="<?php echo($val['iCategoryID']);?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg product-modal">
                <div class="modal-content">
                    <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close" href="#"> <i class=" fa fa-close"></i> </a>                 

                    <div class="product-single pb-50 clearfix">
                        <!-- Single Products Slider Starts --> 
                        <div class="col-lg-6 col-sm-8 col-sm-offset-2 col-lg-offset-0 pt-50">
                            <div class="prod-slider sync1">
                                <div class="item"> 
                                    <img src="<?php echo "../images/". $val['rental_user_vehicle_image']; ?>" alt="">
                                    <a href="assets/img/products/prod-big-1.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i>Vehicle Image</a>
                                </div>
                                <div class="item"> 
                                    <img src="<?php echo "../images/"  . $val['rental_user_image']; ?>" alt=""> 
                                    <a href="assets/img/products/prod-big-2.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i>User Image</a>
                                </div>
                                <div class="item"> 
                                    <img src="<?php echo "../images/"  . $val['rental_user_vehicle_proof']; ?>" alt=""> 
                                    <a href="assets/img/products/prod-big-3.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i>Vehicle Proof</a>
                                </div> 
                            </div>

                            <div  class="sync2">
                                <div class="item"> <a href="#"> <img src="<?php echo "../images/"  . $val['rental_user_vehicle_image']; ?>" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="<?php echo "../images/" . $val['rental_user_image']; ?>" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="<?php echo "../images/" . $val['rental_user_vehicle_proof']; ?>" alt=""> </a> </div>
                            </div>
                        </div>
                        <!-- Single Products Slider Ends --> 

                        <div class="col-lg-6 pt-50">
                            <div class="product-content block-inline">

                                <div class="tag-rate">
                                    <span class="prod-tag tag-1">Most</span> <span class="prod-tag tag-2">Wlcm</span>
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="fsz-12"> Based on 25 reviews</span>
                                    </div>
                                </div>

                                <div class="single-caption"> 
                                    <h3 class="section-title">
                                        <a href="#"> <span class="light-font">  </span>  <strong><?php echo($val['rental_user_vehicle_type']);?></strong></a>
                                    </h3>
                                    <span class="divider-2"></span>
                                    <p class="price"> 
                                        <strong class="clr-txt fsz-20"><?php echo($val['rental_user_vehicle_rate']);?> </strong> <del class="light-font"><?php echo($val['rental_user_vehicle_type']+50);?> </del>
                                    </p>

                                    <div class="fsz-16">Detail about instruments
                                        <p><?php echo($val['rental_user_vehicle_type']);?> </p>
                                    </div>

                                    <ul class="meta">
                                        <li> <strong> Rental Owner Name </strong> <span>:  <?php echo($val['rental_owner_name']);?></span> </li>
                                        <li> <strong> Rental User Name</strong> <span>:  <?php echo($val['rental_user_name']);?></span> </li>
										<li> <strong> Rental User Email Id</strong> <span>:  <?php echo($val['rental_user_email']);?></span> </li>
                                        <li> <strong> Rental User Mobile NO. </strong> <span>:  <?php echo($val['rental_user_no']);?></span> </li>
                                        <li> <strong> User Company Name </strong> <span>:  <?php echo($val['rental_user_company_name']);?></span> </li>
                                        <li> <strong> Village Name </strong> <span>:  <?php echo($val['rental_user_address_village']);?></span> </li>
                                        <li> <strong> Taluka Name</strong> <span>:  <?php echo($val['rental_user_address_taluka']);?></span> </li>
                                        <li> <strong> District Name </strong> <span>:  <?php echo($val['rental_user_address_district']);?></span> </li>
										<li> <strong> State Name </strong> <span>:  <?php echo($val['rental_user_address_state']);?></span> </li>
                                        <li> <strong> Vehicle Company Name </strong> <span>:  <?php echo($val['rental_user_vehicle_name']);?></span> </li>
                                    <li> <strong> User Age</strong> <span>:  <?php echo($val['rental_user_vehicle_age']);?></span> </li>
                                    
									<li> <strong> Update On </strong> <span>:  <?php echo($val['created_at']);?></span> </li>
                                        




									</ul>
                                    <div class="divider-full-1"></div>
                                    <div class="add-cart pt-15">
                                        <a href="#" class="theme-btn btn">Contact <strong> <?php echo($val['rental_user_no']);?> </strong> </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>  

                </div>
            </div>
        </section>
        <!-- / Product Preview Popup -->

								<?php
							}
										}
								?>                               
							   </div>

                            <div class="rel-div pt-50">
                                <div class="divider-full-1"></div>
                                <div class="nav-page">
                                    <a href="#" class="fa fa-long-arrow-left left"></a> 
                                    <a href="#" class="fa fa-long-arrow-right right"></a> 
                                </div>
                            </div>                            

                            
                        </div>

                        
                    </div>
                </div>
            </section>
            <!-- / Shop Ends -->      

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="page-footer">
                <section class="sec-space light-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 footer-widget">
                                <div class="main-logo">
                                    <a href="index.php"> <img alt="" src="images/logo.png" />  </a>
                                    <span class="medium-font">સેન્દ્રિય  સ્ટોર</span>
                                </div>
                                <span class="divider-2"></span>
                                <div class="text-widget">
                                    <p>        સ્વચ્છ એગ્રો ઇન્ડસ્ટ્રીઝની સ્થાપના વર્ષ 2019 માં કરવામાં આવી હતી અને તે એક વ્યાપક સૂક્ષ્મ પોષકતત્ત્વો ખાતરો અને અન્ય એગ્રો ફર્ટિલાઇઝર ઉત્પાદન અને પુરવઠોના વ્યવસાયમાં હતો. અમારી ઓફર શ્રેણીમાં ઝિંક સલ્ફેટ, ઝિંક સલ્ફેટ મોનોહાઇડ્રેટ, મેંગેનીઝ સલ્ફેટ, કોપર સલ્ફેટ, ફેરસ સલ્ફેટ, મેગ્નેશિયમ સલ્ફેટ, ચેલેટેડ માઇક્રોન્યુટ્રિઅન્ટ્સ અને માઇક્રોન્યુટ્રિએન્ટ્સ એગ્રો ફર્ટિલાઇઝર શામેલ છે.</p>
                                    
                                </div>
                            </div>
							<div class="col-md-3 col-sm-4 footer-widget">
							<ul>
                                        <li> <i class="fa fa-map-marker"></i> <span> ડી.ડી.યુ. બૉયસ હોસ્ટેલ, નડિયાદ</span> </li>
                                    
                                        <li> <i class="fa fa-phone-square"></i> <span><a href="#">www.xyz.com</a> </span> </li>
                                    </ul>
							</div>
							<div class="col-md-3 col-sm-4 footer-widget"></div>
                           
						   <div class="col-md-3">
                            <div class="widget">
                                <h3>મુલાકાત લો</h3>
                                <div class="workinghours">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> અઠવાડિયાના દિવસો <span>9:00am - 7:00pm</span></li>
                                        <li><i class="fa fa-clock-o"></i> શનિ અને રવિવાર
 <span>9:00am - 7:00pm</span></li>
                                        <li><i class="fa fa-phone"></i> ફોન <span>+91-9824185900</span></li>

                                        <li><i class="fa fa-envelope-o"></i> ઈ મેલ <span>mayur74patel@gmail.com</span></li>
                                        <li><i class="fa fa-link"></i> વેબસાઇટ<span>www.xyz.com</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </section>

            </footer>
            <!-- /FOOTER -->

            <div id="to-top-mb" class="to-top mb"> <i class="fa fa-arrow-circle-o-up"></i> </div>
            
        </main>
        <!-- /WRAPPER -->

        <!-- Product Preview Popup -->
        
        <!-- JS Global -->
        <script src="assets/js/plugin/jquery-2.2.4.min.js"></script>   
        <script src="assets/js/plugin/bootstrap.min.js"></script>
        <script src="assets/js/plugin/bootstrap-select.min.js"></script>       
        <script src="assets/js/plugin/owl.carousel.min.js"></script>
        <script src="assets/js/plugin/jquery-ui.min.js"></script>

        <!-- Custom JS -->   
        <script src="assets/js/theme.js"></script>


    </body>
</html>	