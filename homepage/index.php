<?php include_once("header.php") ?>
<?  require_once('functions.php');

$ip = getRealIp();
  // echo $ip;
saveIp($ip);
?>

<body>
	<?php include_once("homepage/analytics.php") ?>
	<? include("homepage/header_div.php"); 
	//saveIp();
	?>

	<div id="main_content">

		<div id="slideshow_area">

			<div class="container">
				<ul id="slider2">
					<li><img src="homepage/images/banner_image.jpg" width="1000px"
						height="440px" />
					</li>
					<li><img src="homepage/images/test3.jpg" width="1000px"
						height="440px" />
					</li>
					<li><img src="homepage/images/android.jpg" width="1000px"
						height="440px" />
					</li>
					<li><img src="homepage/images/background.jpg" width="1000px"
						height="440px" />
					</li>
				</ul>
			</div>
			<div id="slideshow_pagination">
				<ul>
					<li><a data-slide-index="0" href="#" class="slideshow_pagination"></a>
					</li>
					<li><a data-slide-index="1" href="#" class="slideshow_pagination"></a>
					</li>
					<li><a data-slide-index="2" href="#" class="slideshow_pagination"></a>
					</li>
					<li><a data-slide-index="3" href="#" class="slideshow_pagination"></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END .container -->
	</div>
	<!-- END #slideshow_area -->


	<div id="mid_content">

		<div class="container">

			<div class="mid_content_info mid_content_space">

				<h2 id="clean">AGILE DESIGN</h2>
				<p>Implementation design and process is done based on the Agile
					princiles in order to achieve the maximun "Agility" for your
					project</p>
			</div>

			<div class="mid_content_info mid_content_space">

				<h2 id="responsive">High Quality Deliverables</h2>
				<p>Quality of every deliverable is the aim for every project.
					Following state of the latest techniques and tools on the field we
					provide top quality experience to the customer for every part of
					the project</p>
			</div>

			<div class="mid_content_info mid_content_space">

				<h2 id="fully">SPRINT PROCEDURES</h2>
				<p>Development process usually follows Scrum developement
					framework.The implementation is divided into a process of several
					small sprints which are indentified by a planning meeting with the
					customer.</p>
				<a href="http://en.wikipedia.org/wiki/File:Scrum_process.svg"><img
					src="homepage/images/arrow_right.png" alt="arrow right" />Read More</a>

			</div>

			<div class="mid_content_info">

				<h2 id="ready">READY FOR CODE</h2>
				<p>Let me know more about your project and we will discover together
					ways and methods to support your business</p>
				<a href="homepage/contact.php"><img
					src="homepage/images/arrow_right.png" alt="arrow right" />More</a>

			</div>

		</div>
		<!-- END .container -->

	</div>
	<!-- END #mid_content -->

	<div id="latest_works">

		<h3>LATEST WORKS</h3>

		<div id="carousel_nav">
			<a href="#" id="previous-column" data-slide-index="0"><img
				id="previous-column" src="homepage/images/bluearrow_left.png"
				alt="arrow left" /> </a> <a href="#" id="next-column"
				data-slide-index="1"><img src="homepage/images/bluearrow_right.png"
				alt="arrow right" /> </a>
		</div>


		<!-- END #carousel_nav -->

		<div id="carousel_wrapper">
			<div class="slide">
				<li id="work01"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work01" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work02"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work02" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work03"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work03" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work04"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work04" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work05"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work05" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work06"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work06" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work07"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work07" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work08"><a href="#"><img
						src="homepage/images/sample_view.gif" alt="work08" /> </a>
				</li>
			</div>

		</div>
		<!-- END #latest_works -->

		<div id="bottom_content">

			<div id="testimonials">

				<h3>TESTIMONIALS</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
					ut nulla sapien, at aliquam erat. Sed vitae massa tellus. Aliquam
					commodo aliquam metus, sed iaculis nibh tempus id. Lorem ipsum
					dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum
					primis in faucibus orci luctus et ultrices posuere cubilia Curae;
					Etiam nec nisi in nisl euismod fringilla. <br /> <br /> <span
						class="testimonial_name">John Travis, CEO, DomainName.com</span>
				</p>

			</div>
			<!-- END #testimonials -->

			<div id="clients">

				<h3>Partners</h3>

				<ul>
					<li><img src="homepage/images/volvoit" alt="Volvo IT" /></li>
					<li><img src="homepage/images/client02.jpg" alt="CNN" /></li>
					<li><img src="homepage/images/client03.jpg" alt="Apartment Finder" />
					</li>
					<li><img src="homepage/images/client04.jpg" alt="John Deere" /></li>
					<li><img src="homepage/images/client05.jpg" alt="Banana Boat" /></li>
					<li><img src="homepage/images/client06.jpg" alt="Fuji Film" /></li>
				</ul>

			</div>
			<!-- END #clients -->

		</div>
		<!-- END #bottom_content -->

	</div>
	<!-- END #main_content -->



	<? include("homepage/footer.php");?>

</body>
</html>
