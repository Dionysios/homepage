<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>BisLite - Contact Us</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/reset.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
    
</head>
<body>
    
   	<? include("header_div.php"); ?>  
    
    <div id="main_content">
            
        <div id="contact_area">
            
            <div class="container">
            
            <h2 id="contact">CONTACT</h2>
            
            <div id="contact_info">
                
                <div id="contact_info_left">
                    
                    <p>Thank you for stopping by. Please use the form below to contact me and will get back to you at the earliest possible
                    <br />
                    <br />
                    For feedback or questions, please email at: <a href="mailto:email@dpapathanopoulos@webst.gr" class="bold_text blue_text">dpapathanopoulos@webst.gr</a></p>
                    
                    <form action="#" method="post" id="contact_form">
                        <fieldset>                            
			    <ol>
                                <li>
				    <label for="name">Name</label><input type="text" name="name" value="" size="77" maxlength="" id="name" />
			        </li>
			        <li>
                        	    <label for="email">Email Address</label><input type="text" name="email" value="" size="77" maxlength="" id="email" />
				</li>
                                <li>
                        	    <label for="email">Subject</label><input type="text" name="email" value="" size="77" maxlength="" id="subject" />
				</li>
				<li>
				    <label for="message">Description</label><textarea name="message" rows="10" cols="57" id="message"></textarea>
				</li>
				<li>
				    <input type="submit" value="SUBMIT" size="" maxlength="" />
				</li>
			    </ol>
                        </fieldset>
                    </form>
                    
                </div> <!-- END #contact_info_left -->
                
                <div id="contact_info_right">
                    
                    <div id="location_map">
                        
                        <h3>We are here!</h3>
                        
                        <a href="#"><img src="images/map.jpg" alt="map" /></a>
                        
                    </div> <!-- END #location_map -->
                    
                    <div id="address">
                    
                        <h3>OFFICE ADDRESS</h3>
                        <p><span class="bold_text">Gothenborg</span>
                        <br />
						Sweden
						  <br />
                       Skype: dpapathanopoulos
                        
                        <br />
                        Phone: 0764071464
                        <br />
                        
                        
                    </div> <!-- END #address -->
                    
                </div> <!-- END #contact_info_right -->
                
            </div> <!-- END #contact_info -->
            
            </div> <!-- END .container -->
            
        </div> <!-- END #contact_area -->
        
    </div> <!-- END #main_content -->
    
   <? include("footer.php");?>
    
</body>
</html>
