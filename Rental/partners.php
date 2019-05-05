<?php
include 'commonincludefiles.php';
global $conn;

if (isset($_POST['submitdata']) && $_POST['submitdata'] == 'save') {
	echo "hello";
    $name = $_POST['name'];   
	$mobile = $_POST['mobile'];
	$state = $_POST['state'];
	$village = $_POST['village'];
	$implement_required = $_POST['implement_required'];
	
   
    $addcategory = add_rental_request($name,$mobile,$state,$village,$implement_required);
    if ($addcategory > 0 && $addcategory != '') {
        $message = "<div class='alert alert-success' style='padding: 10px;'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Category data added successfully.<div class='alert alert-success' style='display:none'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Success!</strong> Category data added successfully.
                                </div></div>";
    } else {
        $message = "<div class='alert alert-error' style='padding: 10px;'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong> problem in adding category data.<div class='alert alert-success' style='display:none'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Error!</strong> problem in adding category data.
                                </div></div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Farmers Rental</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <style type="text/css">
      label.error{ background-color: #f29200; display: inline-block; color: #fff; padding: 2px 4px; font-size: 12px; }
    </style>
  </head>
  <body>
  
  <section id="mobile-top" class="visible-xs visible-sm">
<div class="row">
<div class="col-xs-6 col-sm-6"><img src="images/tel.png" width="15" height="15" alt=""/> &nbsp;<a href="tel:1800 266 266 18">1800 266 266 18</a></div>
<div class="col-xs-6 col-sm-6 text-right"></a></div>
</div>
</section>

<div class="container-fluid">
<div class="row">
	
<!--header wrp start-->
<div class="header-main-wrp">	
<div class="container-1280-wrp">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12">
<div class="logo-wrp">
<a href="#">
<img class="img-responsive" src="images/logo.png"/>	
</a>
	
<a class="hamburger-menu" href="#">
<div id="nav-icon1">
  <span></span>
  <span></span>
  <span></span>
</div>
</a>	
	
</div>	
</div>	
<div class="col-md-9 col-sm-9 col-xs-12">
<div class="nav-wrp">
<ul>
<li class="norm-link active"><a href="index.php">Home <div class="tooltip-hover">A step towards mechanization</div></a></li>	
<li class="norm-link"><a href="page-contact.php">Contact <div class="tooltip-hover">A new business opportunity</div></a></li>	
<li class="norm-link"><a href="products.php">Products <div class="tooltip-hover">End to end farm <br>mechanization solutions</div></a></li>	
<li class="norm-link"><a href="page_about.php">About</a></li>
<li class="icn-link hidden-xs hidden-sm"><a class="head-call" href="tel:1800 266 266 8"><img src="images/head-call-pic_03.png"/></a></li>	
<li class="lang-link"><select class="lanuage-drop"><option>English</option><option>Hindi</option></select></li>	
</ul>	
</div>	
</div>		
<div class="clearfix"></div>	
</div>	
</div>	
</div>	
<!--header wrp end-->

<section id="inner-banner" class="farmers-banner">
<div class="carousel slide  carousel-fade" id="carousel-farmers">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-farmers">
</li>
<li data-slide-to="1" data-target="#carousel-farmers">
</li>

</ol>
<div class="carousel-inner">
<div class="item active">
<div class="container-1280-wrp">
<h2>Rent a tractor with just one call <br><span><a href="tel:1800 266 266 8">1800 266 266 8</a></span></h2>
</div>
</div>
<div class="item">
<div class="container-1280-wrp">
<h2><span>Rent a tractor</span> with just a few <br>
clicks on your mobile</h2>
</div>
</div>

</div>
</div>
</section>	

<section id="farmer-form">
<div class="container-1280-wrp" style="position:relative;">
<div class="form-wrap">
<h3>વિનંતી</h3>
<form  method="post" action="#"  autocomplete="off" enctype="multipart/form-data">
<div class="form-group">
<input type="text" name="name" required="required" class="form-control" placeholder="નામ*">
</div>
<div class="form-group">
<input type="text" name="mobile" required="required" class="form-control" placeholder="મોબાઈલ*">
</div>

<div class="form-group">
<select size="1" name="રાજ્ય" class="form-control">
<option value="" selected="selected">રાજ્ય</option>
<option value="Andaman and Nicobar Islands">અંડમન અને નિકોબાર ટાપુઓ</option>
<option value="Andhra Pradesh">આંધ્રપ્રદેશ</option>
<option value="Arunachal Pradesh">અરુણાચલ પ્રદેશ</option>
<option value="Assam">આસામ</option>
<option value="Bihar">બિહાર</option>
<option value="Chandigarh">ચંદીગઢ</option>
<option value="Chhattisgarh">છત્તીસગઢ</option>
<option value="Dadra and Nagar Haveli">દાદરા અને નગર હવેલી</option>
<option value="Daman and Diu">દમણ અને દીવ</option>
<option value="Delhi">દિલ્હી</option>
<option value="Goa">ગોવા</option>
<option value="Gujarat">ગુજરાત</option>
<option value="Haryana">હરિયાણા</option>
<option value="Himachal Pradesh">હિમાચલ પ્રદેશ</option>
<option value="Jammu and Kashmir">જમ્મુ અને કાશ્મીર</option>
<option value="Jharkhand">ઝારખંડ</option>
<option value="Karnataka">કર્ણાટક</option>
<option value="Kerala">કેરળ</option>
<option value="Lakshadweep">લક્ષદ્વીપ</option>
<option value="Madhya Pradesh">મધ્યપ્રદેશ</option>
<option value="Maharashtra">મહારાષ્ટ્ર</option>
<option value="Manipur">મણિપુર</option>
<option value="Meghalaya">મેઘાલય</option>
<option value="Mizoram">મિઝોરમ</option>
<option value="Nagaland">નાગાલેન્ડ</option>
<option value="Orissa">ઓરિસ્સા</option>

</select>
</div>

<div class="form-group">
<input type="text" name="village" class="form-control" placeholder="ગામ">
</div>
<div class="form-group">
<textarea class="form-control" name="implement_required" rows="4" placeholder="અમલમાં આવશ્યક છે"></textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-custom btn-lg btn-block" name="submitdata" value="save">
</div>

</form>
</div>
</div>
</section>

<section id="farmers" style="position:relative;">
<div class="blue-patch hidden-xs hidden-sm"></div>
<div class="visible-xs visible-sm text-center">
<h2 class="text-center">તે કેવી રીતે કામ કરે છે</h2>
<img src="images/place-order-vertical-mobile.jpg" alt=""/>

<a class="view-all-cta draw-border farmers-know-bt" href="javascript:;" data-toggle="modal" data-target="#myModal" style="padding-left: 0px; margin-top:0px;">વધુ જાણો</a>

</div>
<div class="place-order-wrp hidden-xs  hidden-sm">
	
<div class="cloud-box cloud-1 x1">
<img src="images/cloud-1.png"/>	
</div>
	
<div class="cloud-box cloud-2">
<img src="images/cloud-2.png"/>	
</div>
	
<div class="cloud-box cloud-3 x2">
<img src="images/cloud-3.png"/>	
</div>
	
<div class="cloud-box cloud-4">
<img src="images/cloud-4.png"/>	
</div>
	
<div class="cloud-box cloud-5 x3">
<img src="images/cloud-5.png"/>	
</div>
	
<div class="cloud-box cloud-6">
<img src="images/cloud-6.png"/>	
</div>
	
<div class="cloud-box cloud-7 x4">
<img src="images/cloud-7.png"/>	
</div>
	
<div class="cloud-box cloud-8">
<img src="images/cloud-8.png"/>	
</div>
	 
<div class="cloud-box cloud-9 x5">
<img src="images/cloud-9.png"/>	
</div>
	
<div class="cloud-box cloud-10">
<img src="images/cloud-10.png"/>	
</div>	


	
<div class="container-1280-wrp" style="position:relative;">
<h2 class="text-center">તે કેવી રીતે કામ કરે છે</h2>

<div class="place-order-pic-box">
<div class="info-graph graph-1 wow rotate-in-bl" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="1s"><p class="left-1 wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="1.5s">અમને ટૉલ-ફ્રી પર કૉલ કરો: <a href="tel:1800 266 266 8">1800 266 266 8</a></p></div>
<div class="info-graph graph-2 wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="1.1s">
<p class="left-2 wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="1.6s">વેબસાઇટ પર ઓર્ડર</p>
</div>
<div class="info-graph graph-3 wow rotate-in-bl" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="1.2s"><p class="left-3 wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="1.6s">ફોર્મ ભરો</p></div>

<div class="info-graph graph-4 wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.2s"></div>
<div class="info-graph graph-5 wow fade-in-right" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.3s">
<p>તમારા અમલ અને ટ્રેક્ટર પસંદ કરો</p>
</div>
<div class="info-graph graph-6 wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.4s">
<p>ઓડર પાક્કો</p>
</div>
<div class="info-graph graph-7 wow fade-in-right" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.5s">
<p>તમારી સેવા પર ઑપરેટર</p>
</div>
<div class="info-graph graph-8 wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.6s"><p>હેપી <br> ખેડૂત</p></div>
</div>	

<div class="fan fan-1 spin">
<img src="images/fan.png"/>	
</div>

<div class="fan fan-2 spin">
<img src="images/fan.png"/>	
</div>	

<!--<div class="fan fan-3 spin">
<img src="images/fan.png"/>	
</div>

<div class="fan fan-4 spin">
<img src="images/fan.png"/>	
</div>-->

<div class="fan fan-5 spin">
<img src="images/fan.png"/>	
</div>

<div class="car"><img src="images/car.png" alt=""/></div>
<a class="view-all-cta draw-border farmers-know-bt" href="javascript:;" data-toggle="modal" data-target="#myModal" style="padding-left: 0px; margin-top:0px;">વધુ જાણો</a>
</div>	
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
      <iframe width="100%" height="450" src="https://www.youtube.com/embed/s4sH16Xf0Lc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
</section>

<section id="tringo-advantage">
<div class="container-1280-wrp">
<h2>અમારા લાભ</h2>

<div class="row no-margin">
<div class="col-md-3">
<figure class="effect-bubba wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.3s">
<figcaption>
<img src="images/advan-pic-1.jpg" />
<h3><strong>તમારી બધી જરૂરિયાતો માટે એક સ્ટોપ સોલ્યુશન</h3>
</figcaption>			
</figure>
</div>
<div class="col-md-3">
<figure class="effect-bubba wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.4s">
<figcaption>
<img src="images/advan-pic-2.jpg" />
<h3><strong>તમારી સગવડ સમયે અમલીકરણની ઉપલબ્ધતા</h3>
</figcaption>			
</figure>
</div>
<div class="col-md-3">
<figure class="effect-bubba wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.5s">
<figcaption>
<img src="images/advan-pic-3.jpg" />
<h3><strong>કોઈ સમાધાન નથી</strong>
કામની ગુણવત્તા પર</h3>
</figcaption>			
</figure>
</div>
<div class="col-md-3">
<figure class="effect-bubba wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.6s">
<figcaption>
<img src="images/advan-pic-4.jpg" />
<h3>કોઈ છુપાયેલા ખર્ચ નથી 
<strong>ઉપયોગ દીઠ ચૂકવણી</strong> 
</h3>
</figcaption>			
</figure>
</div>
</div>
</div>
</section>

<section id="customers">
<div class="container">
<div class="customers-slider"> 
<h2>અમારા ગ્રાહકો પાસેથી સાંભળો</h2>
<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
    <li class="wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.3s">
      <div class="customers-box">
        <img src="images/customer1.jpg" alt=""/> 
        <h3>નિલેશ કદમ, <span>સાતારા</span></h3>
        <p>આ વેબસાઈટએ મારા ગામમાં તમામ ટ્રેક્ટર સંબંધિત સમસ્યાઓ ઉકેલી છે - તે ટ્રેક્ટરની પ્રાપ્યતાને ખાતરી કરે છે, તે પણ સમયસર, પ્રશિક્ષિત ડ્રાઇવરો અને નિયત દરો સાથે ...</p>
        </div>
    </li>
    <li class="wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.4s">
      <div class="customers-box">
        <img src="images/customer2.jpg" alt=""/> 
        <h3>કુંડલિક ગોલે, <span>મહારાષ્ટ્ર</span></h3>
        <p>જ્યારે પણ હું ટ્રેક્ટર ઇચ્છું છું, ત્યારે મને એક શોધવા માટે સંઘર્ષ કરવો પડે છે, ક્યારેક ડ્રાઇવરને પણ શોધવાનું હોય છે, પછી તે સારી નોકરી કરતા નથી. અમે, ફક્ત 1 કૉલ સાથે, મને તાલીમબદ્ધ ડ્રાઇવર અને સારી સેવા સાથે નિશ્ચિત દર પર ટ્રેક્ટર મળે છે!</p>
        </div>
    </li>
    <li class="wow fade-in-left" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.5s">
      <div class="customers-box">
        <img src="images/customer3.jpg" alt=""/> 
        <h3>જીતુ પટેલ, <span>ગાંધીનગર </span></h3>
        <p>આ વેબસાઇટ મારા ટ્રેક્ટર ભાડેથી સંબંધિત સમસ્યાઓનો અંત છે. જાહેરાતમાં અને પછી ઉપયોગમાં જોયું, મને ખાતરી છે કે તે મને બધા અમલીકરણો અને વેબસાઇટ પર વિશ્વાસ કરશે</p>
        </div>
    </li>
    <!-- items mirrored twice, total of 12 -->
  </ul>
</div>
</div>

</div>
</section>


<!--footer top wrp start-->
<div class="footer-top-wrp">
<div class="container-1280-wrp">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="100">
<div class="footer-logo-wrp">
<a href="javascript:void(0)">
<img class="img-responsive" src="images/logo.png"/>	
</a>	
	
<p class="footer-logo-btm-desc"><span>એગ્રો</span> એ એક અગ્રણી ટ્રેક્ટર અને ફાર્મ ઇક્વિપમેન્ટ રેન્ટલ બિઝનેસ છે જેનો હેતુ ભારતીય ખેતીમાં 

તકનીકી શક્તિ અને મજબૂત ફ્રેન્ચાઇઝી નેટવર્ક મારફતે મિકેનાઇઝેશનનું સ્તર વધારવાનો છે, જેથી 

કૃષિ મિકેનાઇઝેશન સરળતાથી ઍક્સેસિબલ, સસ્તું અને સમગ્ર ભારતમાં ખેડૂતો સુધી પહોંચી શકાય.</p>	
	
</div>	
</div>	
<div class="col-md-6 col-sm-6 col-xs-12" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="100">

<div class="col-md-4 col-sm-4 col-xs-12">
<ul class="footer-link-top">
<li><a href="index.php">Home</a></li>	
<li><a href="about-us.php">About Us</a></li>	
<li><a href="contact-us.php">Contact Us</a></li>	
	
</ul>	
</div>	
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="top-last-ftr">	
<p class="footer-title">Social</p>	
<a href="https://www.facebook.com/" target="_blank"><img src="images/social-1_08.jpg"/></a>	
<a href="https://twitter.com/" target="_blank"><img src="images/social-2_08.jpg"/></a>	
<a href="https://www.instagram.com/" target="_blank"><img src="images/social-3_08.jpg"/></a>
</div>	
<div class="bottom-last-ftr">	
<p class="footer-title captlize-txt">Available on</p>	
</div>
	
	
</div>	
</div>	
<div class="clearfix"></div>	
</div>	
</div>		
</div>	
<!--footer top wrp end-->
	
<!--copyright-wrp-start-->
<div class="copy-right-wrp">
<div class="container-1280-wrp">
<div class="row no-margin">
<div class="col-md-10 no-padding"><span class="copy-link">Copyright © 2017 DDU </span></div>
<div class="col-md-2 no-padding"><a href="http://www.xyz.in/" target="_blank">Site Credits : Mayur Patel</a></div>
</div>
	
</div>	
</div>	
<!--copyright-wrp-end-->
	
		
</div>	
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
    <script src="js/scripts.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script defer src="js/jquery.touchSwipe.min.js"></script>
    <script defer src="js/jquery.validate.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
		
$('#carousel-farmers').carousel({
interval: 3000,
cycle: true
});

      $('#login-form').validate({

        rules:{
          name:{
            required:true,
          },
          mobile:{
            required:true,
            digits:true
          }

        },
        messages:{
          name:{
            required:'Name is required',
          },
          mobile:{
            required:'Mobile no. is required',
            number:'Enter valid mobile number'
          }

        },
        submitHandler:function(form){
          var name=encodeURIComponent($('#farmer-form [name="name"]').val());
          var mobile=encodeURIComponent($('#farmer-form [name="mobile"]').val());
          var state=encodeURIComponent($('#farmer-form [name="state"]').val());
          var village=encodeURIComponent($('#farmer-form [name="village"]').val());
          var implement_required=encodeURIComponent($('#farmer-form [name="implement_required"]').val());
          $.ajax({
            url: 'process_farmers.php',
            type: 'POST',
            data:'name='+name+'&mobile='+mobile+'&state='+state+'&village='+village+'&implement_required='+implement_required
          })
          .done(function(data) {
            console.log(data);
            alert('Details submitted successfully. We will get in touch with you.')
            $('#farmer-form [name="name"]').val('')
            $('#farmer-form [name="mobile"]').val('')
            $('#farmer-form [name="state"]').val('')
            $('#farmer-form [name="village"]').val('')
            $('#farmer-form [name="implement_required"]').val('')
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });
          



        }



      })

		
		$(".carousel").swipe({
  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');
  },
  allowPageScroll:"vertical"
});

/*$('#carousel-example-generic').carousel({
  interval: 1000,
  cycle: true
}); */
		
$('.pointer-title').each(function(){
var x=$(this).attr('x');
var y=$(this).attr('y');
$(this).css('left',x+'px');
$(this).css('top',y+'px');	
});	
	
	(function( $ ) {

	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
	
})(jQuery);	
		
		
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
			
		 $('.nav-wrp').toggle('show');		
				
	});	
	})
    </script>
		  
        
        <script type="text/javascript">
        $(window).load(function() {
			
			if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

 $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    //itemWidth: 320,
    itemMargin:0,
	controlNav: false,
    minItems: 1,
    maxItems: 3
  });
	

}		
		
	else{
		
		 $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin:30,
	controlNav: false,
	directionNav: false,
    minItems: 1,
    maxItems: 3
  });
		
	}	
		
			
			
 
});
        </script>
        
	<script>
	
		wow = new WOW(
{
mobile:false,// default
}
)
wow.init();
	</script>
		
  </body>
</html>