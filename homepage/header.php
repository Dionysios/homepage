<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="" />
<meta name="description" content="Personal Web Page">
<meta name="keywords"
	content="Dionysios Papathanopoulos,Java,Android,Hibernate,Spring,HTML,CSS,XML,JavaScript">
<meta name="author" content="Dionysios Papathanopoulos">
<meta charset="UTF-8">
<title>Dionysios - Home</title>


<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0"> -->

<link rel="stylesheet" type="text/css"
	href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css"
	media="all" />
<link rel="stylesheet" type="text/css"
	href="../homepage/stylesheets/resume.css" media="all" />
<link rel="stylesheet" type="text/css"
	href="../homepage/stylesheets/main.css" />
<!-- 	<link rel="stylesheet" type="text/css"
	href="../homepage/stylesheets/foundation.css" /> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="homepage/js/jquery.bxslider.min.js"></script>
<script type="text/javascript"
	src="homepage/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="homepage/js/jquery.jcarousel.min.js"></script>
 
<!--  <script type='text/javascript' src="js/modernizr.foundation.js"></script> -->
<link rel="stylesheet" type="text/css"
	media="only screen and (max-device-width: 560px)"
	href="../homepage/stylesheets/mediaqueries.css"> 
	<link rel="stylesheet" type="text/css"
	media="only screen and (max-device-width: 950px)"
	href="../homepage/stylesheets/mediaqueries.css"> 
<script> 
  $(document).ready(function() {
  $('#carousel_wrapper').bxSlider({
	  controls: false,
	  minSlides: 4,
	  maxSlides: 4,
	  pagerCustom: '#carousel_nav',
	  slideWidth: 360,
	  responsive: true,
	  slideMargin: 10
	  });
  
  $('#slider2').bxSlider({
	  mode: 'fade',
	  auto: true,
	  captions: true,
	  autoControls: false, 
	  pagerCustom: '#slideshow_pagination',
	  responsive: true,
	  controls: false,
	  timeout: 5000,
	});
	});

	$(document).ready(function() {
			$('.header').scrollToFixed();
	});
</script>
</script>
<?php include_once("homepage/analytics.php") ?>
</head>