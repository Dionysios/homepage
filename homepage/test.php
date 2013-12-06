<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" type="text/css" href="stylesheets/test.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />

<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#s2') 
.before('<div id="slideshow_pagination">') 
.cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    pager:  '#slideshow_pagination' 
});
});
</script>
</head>
<body>
<div id="s2" class="pics"> 
<img src="images/client01.jpg" width="200px" height="200px">
<img src="images/client02.jpg" width="200px" height="200px">
<img src="images/client03.jpg" width="200px" height="200px">
</div>
</body>
