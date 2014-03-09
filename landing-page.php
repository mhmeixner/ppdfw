<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	
	<!-- mobile meta tag -->		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo str_replace("-", " ", ucwords($_GET["seed"])); ?> Plumbing Texas | <?php echo str_replace("-", " ", ucwords($_GET["final"])); ?></title> 
    
    <meta name="description" content="<?php echo str_replace("-", " ", ucwords($_GET["final"])); ?>" />
    <meta name="keywords" content="<?php echo str_replace("-", " ", ucwords($_GET["final"])); ?>, <?php echo str_replace("-", " ", ucwords($_GET["seed"])); ?>,<?php echo str_replace("-", " ", ucwords($_GET["expansion"])); ?>" />

	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    
    <!-- Adjust number to call for mobile devices -->
    <link rel="stylesheet" media="(max-width: 640px)" href="mobile.css" />
    
    <link rel="stylesheet" media="(max-width: 1136px) and (orientation: landscape)" href="mobile.css" />
	
	<!-- color scheme -->
	<link rel="stylesheet" type="text/css" href="color-schemes/blue/blue.css" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="screen"/>

	<!-- setting mobile environment -->		
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen" />		

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/jflickrfeed.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="js/jquery.contact.js"></script>
	<script type="text/javascript" src="js/jquery.preloadify.min.js"></script>
	
	<script type="text/javascript" src="js/custom.js"></script>
	
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">

</head> 

<body> 

<!--
<img id="bg" src="images/apple.jpg" alt="apple-background" />
-->

<div id="wrapper">
	<div id="top">
	<div class="centered-wrapper">	
		<header id="header">
			<div class="one-third">
				<center><div class="logo" style="margin-top:15px;"><a href="index.html"><img src="images/logo.png"  height="60px;" alt="<?php echo str_replace("-", " ", ucwords($_GET["final"])); ?>" /></a></div>
				<h2 class="mobile-number">				   (972) 989 - 5880</h2>
			</div><!--end one-third-->
			
			<div class="two-third column-last">	
            	
			
				<nav id="navigation">
					<ul id="mainnav">
						<li><a href="index.php">Home</a></li>
						<li><a href="plumbing.php">Plumbing</a></li>
                        <li><a href="slab-leaks.php">Slab Leaks</a></li>
                        <li><a href="water-heater-installations.php">Water Heater Installations</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav><!--end navigation-->
			</div><!--end two-third-->
			<div class="clear"></div>
		</header>

<section class="nivo">
			<div class="slider-wrapper">
				<div id="slider" class="nivoSlider">
					<img src="images/slide1.jpg" data-thumb="images/slide2.jpg" alt="<?php echo str_replace("-", " ", ucwords($_GET["final"])); ?>" />
					<a href="#"><img src="images/slide2.jpg" data-thumb="images/slide2.jpg" alt="<?php echo str_replace("-", " ", ucwords($_GET["final"])); ?>" /></a>
					<a href="#"><img src="images/slide3.jpg" data-thumb="images/slide3.jpg" alt="<?php echo str_replace("-", " ", ucwords($_GET["final"])); ?>" /></a>
				</div>					
			</div>
		</section>
	</div><!--end centered-wrapper-->
	</div><!--end top-->
	
	<div class="centered-wrapper">	
	
		<section class="intro">
			<h2>Servicing the <?php echo str_replace("-", " ", ucwords($_GET["seed"])); ?>, TX area.</h2>
			<h5>We don't charge trip fees, and before we start the work we tell you the price. So why wait? Call us!</h5>
		</section>

		<section class="services">
			<div class="one-third">
				<div class="service-item">
				  <h3 class="service"><?php echo str_replace("-", " ", ucwords($_GET["seed"])); ?> Slab Leak Repair</h3>
					<p class="clear">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
					<a href="#" class="service-more">Read More</a>
				</div>
			</div><!--end one-third-->
			<div class="one-third">
				<div class="service-item">
				  <h3 class="service">Water Heater Installation &amp; Repair in <?php echo str_replace("-", " ", ucwords($_GET["expansion"])); ?>, TX</h3>
					<p class="clear">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
					<a href="#" class="service-more">Read More</a>
				</div>
			</div><!--end one-third-->
			<div class="one-third column-last">
				<div class="service-item">
				  <h3 class="service">Residential Plumbing in <?php echo str_replace("-", " ", ucwords($_GET["seed"])); ?>, TX</h3>
					<p class="clear">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
					<a href="#" class="service-more">Read More</a>
				</div>
			</div><!--end one-third-->
		</section>
	
		<section>
		</section></div>
	
	<section>	</section>	
    
    <?php include('common/footer.php'); ?>