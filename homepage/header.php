<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />
    <title>DionPapas - Home</title>
    
  
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="../homepage/stylesheets/resume.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../homepage/stylesheets/main.css" />
    <script type="text/javascript" src="homepage/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="homepage/js/jquery.cycle.all.js"></script>
	
	<script type="text/javascript">
$(document).ready(function() {
  $('#slideshow_container') 
.before('<div id="slideshow_buttons">') 
.cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 5000, 
    pager:  '#slideshow_buttons',   
    pagerAnchorBuilder: function(index, el) {
     return '<a class="dot" href="#">&nbsp;</a>'; // whatever markup you want
    }
});
});
</script>
<?php include_once("homepage/analytics.php") ?>
</head>
