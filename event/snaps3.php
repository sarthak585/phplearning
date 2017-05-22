<?php

    $conn = mysqli_connect('localhost', 'root', '');            
    $db = mysqli_select_db($conn, 'raksha_clothes');
/*Prepare Category data from DB*/
    $sql1 = 'SELECT * FROM category where IsActive=1';
    $rs = mysqli_query($conn, $sql1);
    $category = array();
    while($row = mysqli_fetch_assoc($rs)) {
        $category[] = $row;
    }
/*Prepare Product data from DB*/
    $categoryid = !empty($_GET) ? $_GET['CategoryId'] : NULL;
    $sql2 = 'SELECT * FROM product';
    if ($categoryid>0){
    	$sql2 = 'SELECT * FROM product where CategoryId='.$categoryid;
    }    
    $rs = mysqli_query($conn, $sql2);
    $product = array();
    while($row = mysqli_fetch_assoc($rs)) {
        $product[] = $row;
    }
?>        
<!DOCTYPE html>

<!-- Mirrored from templates.stillidea.net/crazyhour/snaps3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Apr 2017 11:36:10 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crazy Hour HTML Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<!-- Styles -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/color/color.css" title="color" />
</head>


<body>
<div class="page-loader">
  <div class="item one"></div>
</div><!-- Page Loader -->
<header>
	<div class="container">
		<div class="logo"><a href="#" title=""><img src="images/logo.png" alt="" /></a></div><!-- Logo -->
		<nav>
			<ul>
				<li><a href="index.html" title=""><span><i class="fa fa-home"></i></span>Home</a>
					<ul>
						<li><a href="index8.html" title="">New Wedding Homepage</a></li>
						<li><a href="index7.html" title="">New Charity Homepage With Sticky Header</a></li>
						<li><a href="index.html" title="">Home Page 1</a></li>
						<li><a href="index2.html" title="">Home Page 2</a></li>
						<li><a href="index3.html" title="">Home Page 3</a></li>
						<li><a href="index4.html" title="">Home Page With Text Carousel</a></li>
						<li><a href="index5.html" title="">Home Page With Kenburns</a></li>
						<li><a href="index6.html" title="">Home Page With Video Slide</a></li>
					</ul>
				</li>
				<li><a href="snaps.html" title=""><span><i class="fa fa-picture-o"></i></span>Gallery</a>
					<ul>
						<li><a href="snaps1.html" title="">Gallery Style 1</a></li>
						<li><a href="snaps2.html" title="">Gallery Style 2</a></li>
						<li><a href="snaps3.html" title="">Gallery Style 3</a></li>
						<li><a href="snaps4.html" title="">Gallery Style 4</a></li>
						<li><a href="snaps5.html" title="">Gallery Style 5</a></li>
					</ul>
				</li>
				<li><a href="#" title=""><span><i class="fa fa-pagelines"></i></span>Pages</a>
					<ul>
						<li><a href="upcoming-event.html" title="">Events</a>
							<ul>
								<li><a href="upcoming-event.html" title="">Upcoming Events</a></li>
								<li><a href="event-detail.html" title="">Event Detail Page</a></li>
								<li><a href="event-detail-sidebar1.html" title="">Event Detail Left Sidebar</a></li>
								<li><a href="event-detail-sidebar2.html" title="">Event Detail Right Sidebar</a></li>
							</ul>
						</li>
						<li><a href="blog.html" title="">Blog</a>
							<ul>
								<li><a href="blog.html" title="">Blog Page</a></li>
								<li><a href="post-detail.html" title="">Blog Single Page</a></li>
								<li><a href="post-detail-sidebar1.html" title="">Blog Single Left Sidebar</a></li>
								<li><a href="post-detail-sidebar2.html" title="">Blog Single Right Sidebar</a></li>
							</ul>
						</li>
						<li><a href="speakers.html" title="">Event Speakers</a></li>
						<li><a href="404.html" title="">Error 404</a></li>
						<li><a href="comming-soon.html" title="">Comming soon Page</a></li>
					</ul>
				</li>
				<li><a href="schedule.html" title=""><span><i class="fa fa-joomla"></i></span>Schedule</a></li>
				<li><a href="packages.html" title=""><span><i class="fa fa-google-wallet"></i></span>Packages</a></li>
				<li><a href="about.html" title=""><span><i class="fa fa-edit"></i></span>About</a></li>
			</ul>
		</nav><!-- Navigation -->
	</div>
</header><!-- Header -->

<div class="responsive-header">
	<div class="responsive-logo">
		<a href="#" title=""><img src="images/logo.png" alt="Logo" /></a>
	</div><!-- Responsive Logo -->	
	<span><i class="fa fa-align-justify"></i></span>
	<ul>
		<li><a href="index.html" title="">Home</a>
			<ul>
				<li><a href="index8.html" title="">New Wedding Homepage</a></li>
				<li><a href="index7.html" title="">New Charity Homepage With Sticky Header</a></li>
				<li><a href="index.html" title="">Home Page 1</a></li>
				<li><a href="index2.html" title="">Home Page 2</a></li>
				<li><a href="index3.html" title="">Home Page 3</a></li>
				<li><a href="index4.html" title="">Home Page With Text Carousel</a></li>
				<li><a href="index5.html" title="">Home Page With Kenburns</a></li>
				<li><a href="index6.html" title="">Home Page With Video Slide</a></li>
			</ul>
		</li>
		<li><a href="snaps.html" title="">Gallery</a>
			<ul>
				<li><a href="snaps1.html" title="">Gallery Style 1</a></li>
				<li><a href="snaps2.html" title="">Gallery Style 2</a></li>
				<li><a href="snaps3.html" title="">Gallery Style 3</a></li>
				<li><a href="snaps4.html" title="">Gallery Style 4</a></li>
				<li><a href="snaps5.html" title="">Gallery Style 5</a></li>
			</ul>
		</li>
		<li><a href="#" title="">Pages</a>
			<ul>
				<li><a href="upcoming-event.html" title="">Events</a>
					<ul>
						<li><a href="upcoming-event.html" title="">Upcoming Events</a></li>
						<li><a href="event-detail.html" title="">Event Detail Page</a></li>
						<li><a href="event-detail-sidebar1.html" title="">Event Detail Left Sidebar</a></li>
						<li><a href="event-detail-sidebar2.html" title="">Event Detail Right Sidebar</a></li>
					</ul>
				</li>
				<li><a href="blog.html" title="">Blog</a>
					<ul>
						<li><a href="blog.html" title="">Blog Page</a></li>
						<li><a href="post-detail.html" title="">Blog Single Page</a></li>
						<li><a href="post-detail-sidebar1.html" title="">Blog Single Left Sidebar</a></li>
						<li><a href="post-detail-sidebar2.html" title="">Blog Single Right Sidebar</a></li>
					</ul>
				</li>
				<li><a href="schedule.html" title="">Event Schedule Page</a></li>
				<li><a href="speakers.html" title="">Event Speakers</a></li>
				<li><a href="404.html" title="">Error 404</a></li>
				<li><a href="comming-soon.html" title="">Comming soon Page</a></li>
			</ul>
		</li>
		<li><a href="Packages-2.html" title="">Packages</a></li>
		<li><a href="about.html" title="">About</a></li>
	</ul>
</div><!--Responsive header -->


<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(images/parallax8.jpg);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>SNAPS <span>FROM SHOWS</span></h1>
						<p>Aiusmod tempor incididunt ut labore et dolore magna aliqua consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block gray">
		<div class="">
			<div class="row">
				<div class="col-md-12 column">
					<div class="controls">	
						<ul>
							<li class="filter <?php if(!$categoryid){ echo 'active';} ?>" data-filter=""><a href="http://localhost/website/event/snaps3.php">All</a></li>							
							<?php
								foreach ($category as $row) {
								?>								
								<li class="filter <?php if($categoryid == $row['CategoryId']){ echo 'active';} ?>" data-filter="category_<?php echo $row['CategoryId']; ?>"><a href="http://localhost/website/event/snaps3.php?CategoryId=<?php echo $row['CategoryId']; ?>"><?php echo $row['Name']; ?></a></li>
								<?php
								}
							?>	
						</ul>
					</div>
					<div class="row">
						<ul id="Grid" class="merged">
							<?php
								foreach ($product as $row) {
								?>	
								<li class="mix category_1 col-md-2">
								<div class="portfolio">
									<img src="../web/images/<?php echo $row['Image']; ?>" alt="" width="216px" height="238px"/>
									<div class="hover">
										<h3><?php echo $row['Name']; ?></h3>
										<p><?php echo $row['Description']; ?></p>
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
								</li>
								<?php
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<footer>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h2>LET'S SAY <span>HELLO</span></h2>
						<p>Aiusmod tempor incididunt ut labore magna aliqua.</p>
					</div><!-- Title -->
					<div class="footer-widgets">
						<div class="row">
							<div class="col-md-4">
								<div class="widget">
									<div class="about">
										<p>Sed do eiusmod tempor incididunt ut labo areet magna aliqua. Ut enim ad minim veniamum doli consectetur adipisicing elit, sed do eiusmod teu aliquam libero quam, non accumsan.</p>
									</div>
									<ul class="contact-info">
										<li><span><i class="fa fa-phone"></i></span>1-223-000-2225</li>
										<li><span><i class="fa fa-envelope-o"></i></span>stillidea@gmail.com</li>
										<li><span><i class="fa fa-map-marker"></i></span>02 Collins Qd Melbourne, Vic 3001</li>
									</ul>
								</div><!-- About Widget -->
							</div>
							<div class="col-md-4">
								<div class="widget">
									<div id="message"></div>
									<form  class="contact" method="post" action="http://templates.stillidea.net/crazyhour/contact.php" name="contactform" id="contactform">
										<input name="name" type="text" id="name" placeholder="Full Name" />
										<input  name="email" type="text" id="email"  placeholder="Email" />
										<textarea name="comments" id="comments"  placeholder="Details"></textarea>
										<button class="button" type="submit" id="submit">REQUEST NOW</button>
									</form>
								</div><!-- Contact Form Widget -->
							</div>
							<div class="col-md-4">
								<div class="widget">
									<div class="map">
										<iframe src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=uk&amp;aq=&amp;sll=18.312811,-4.306641&amp;sspn=46.292419,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=52.352119,-2.647705&amp;spn=0.685471,1.352692&amp;t=p&amp;z=10&amp;output=embed"></iframe>		
									</div>
								</div><!-- Map Widget -->
							</div>
						</div>
					</div><!-- Footer Widgets -->
				</div>
			</div>
		</div>
	</div>
</footer><!-- Footer -->
<div class="bottom-footer">
	<div class="container">
		<p>All rights reserved 2015-<a title="" href="#">Crazy Hour</a> By <a title="" href="http://themeforest.net/user/stillidea/portfolio?WT.ac=item_portfolio&amp;WT.z_author=stillidea">stillidea.com</a></p>
	</div>
</div><!-- Bottom Footer -->


<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="js/jquery2.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script>
jQuery(window).load(function() {
	/* =============== Masonary Tabs ===================== */
	$(function(){
		$('#Grid').mixitup({
			effects: ['fade','scale'],
			transitionSpeed: 600,
			layoutMode: 'list',
		});
	});

});	
</script>
<script type="text/javascript" src="js/script.js"></script>

</body>