<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="keywords" content="" />
<meta name="description" content="" />
<title>DionPapas - Home</title>


<link rel="stylesheet" type="text/css"
	href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css"
	media="all" />
<link rel="stylesheet" type="text/css"
	href="../homepage/stylesheets/resume.css" media="all" />
<link rel="stylesheet" type="text/css"
	href="../homepage/stylesheets/main.css" />



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="homepage/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>

<script> 
  $(document).ready(function() {
  $('#carousel_wrapper').bxSlider({
	  controls: false,
	  minSlides: 4,
	  maxSlides: 4,
	  pagerCustom: '#carousel_nav',
	  slideWidth: 360,
	  slideMargin: 10
	  });
  
  $('#slider2').bxSlider({
	  mode: 'fade',
	  auto: true,
	  autoControls: false, 
	  pagerCustom: '#slideshow_pagination',
	  controls: false,
	  timeout: 5000,
	});
	});

</script>
<?php include_once("homepage/analytics.php") ?>
</head>
