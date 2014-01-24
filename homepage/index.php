<?php include_once("header.php") ?>
<?  require_once('functions.php');

$ip = getRealIp();
// echo $ip;
saveIp($ip);
?>

<body>
	<?php //include_once("homepage/analytics.php") ?>
	<? include("homepage/header_div.php"); 
	//saveIp();
	?>

	<div id="main_content">

		<div id="slideshow_area">

			<div class="container">
				<ul id="slider2">
					<li><a href="/homepage/resume.php"><img
							src="homepage/images/banner_image.jpg" width="1000px"
							height="440px"
							title="Applications developement in Java, Java EE, Spring, Hibernate and more..." />
					</a></li>
					<li><a href="/homepage/resume.php"><img
							src="homepage/images/test3.jpg" width="1000px" height="440px" />
					</a></li>
					<li><a href="/homepage/resume.php"><img
							src="homepage/images/android.jpg" width="1000px" height="440px" />
					</a></li>
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
				<div id="spring_text">
					<p>Implementation design and process is done based on the Agile
						princiles in order to achieve the maximun "Agility" for your
						project</p>
				</div>
			</div>
			<div class="mid_content_info mid_content_space">
				<h2 id="responsive">High Quality Deliverables</h2>
				<div id="spring_text">
					<p>Quality of every deliverable is the aim for every project.
						Following state of the latest techniques and tools on the field we
						provide top quality experience to the customer for every part of
						the project</p>
				</div>
			</div>
			<div class="mid_content_info mid_content_space">
				<h2 id="fully">SPRINT PROCEDURES</h2>
				<div id="spring_text">
					<p>Development process follows Scrum developement
						framework.Implementation is divided into sprints based on the
						needs of the customer.
				
				</div>
				<a href="http://en.wikipedia.org/wiki/File:Scrum_process.svg"><img
					src="homepage/images/arrow_right.png" alt="arrow right" />Read More</a>
			</div>
			<div class="mid_content_info">
				<h2 id="ready">READY FOR CODE</h2>
				<div id="spring_text">
					<p>Let me know more about your project and we will discover
						together ways and methods to support your business</p>
				</div>
				<a href="homepage/contact.php"><img
					src="homepage/images/arrow_right.png" alt="arrow right" />More</a>
			</div>

		</div>
		<!-- END mid content -->
		<!-- END .container -->

	</div>
	<!-- END #mid_content -->

	<div id="latest_works">

		<h3>LATEST WORKS</h3>

		<div id="carousel_nav">
			<a href="#" id="previous-column" class="previous-column"
				data-slide-index="0"><img id="previous-column"
				src="homepage/images/bluearrow_left.png" alt="arrow left" /> </a> <a
				href="#" id="next-column" data-slide-index="1"><img
				src="homepage/images/bluearrow_right.png" alt="arrow right" /> </a>
		</div>


		<!-- END #carousel_nav -->

		<div id="carousel_wrapper">
			<div class="slide">
				<li id="work09"><a href="http://itmentorship.se/"><img
						src="homepage/images/sample_view.gif" alt="work09" /> </a>
				</li>
			</div>
			<div class="slide">
				<li id="work10"><a href="http://lrf.gr/"><img
						src="homepage/images/sample_view.gif" alt="work10" /> </a>
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
						src="homepage/images/sample_view.gif" alt="work06" /> </a></li>
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
		<!-- END #carosel wrapper -->
	</div>
	<!-- END #latest_works -->


	<div id="bottom_content">

		<div id="testimonials">

			<h3>TESTIMONIALS</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut
				nulla sapien, at aliquam erat. Sed vitae massa tellus. Aliquam
				commodo aliquam metus, sed iaculis nibh tempus id. Lorem ipsum dolor
				sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis
				in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam nec
				nisi in nisl euismod fringilla. <br /> <br /> <span
					class="testimonial_name">John Travis, CEO, DomainName.com</span>
			</p>

		</div>
		<!-- END #testimonials -->

		<div id="clients">

			<h3>Partners</h3>

			<ul>
				<li><img src="homepage/images/client01.jpg" alt="VOLVO" /></li>
				<li><img src="homepage/images/client02.jpg" alt="WEBST" /></li>
				<li><img src="homepage/images/client03.jpg"
					alt="GOTHENBURG UNIVERSITY" />
				</li>
				<li><img src="homepage/images/client04.jpg" alt="CHALMERS" /></li>
				<li><img src="homepage/images/client05.jpg" alt="CTI Patras" /></li>
				<li><img src="homepage/images/client06.jpg" alt="Provide IT" /></li>
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
