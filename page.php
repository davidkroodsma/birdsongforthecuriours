<?php 
 // header("http://www.birdsongforthecurious.com/book_sample.pdf");
header("Location: http://www.birdsongforthecurious.com/book_sample.pdf"); 
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Birdsong for the Curious Naturalist: Page Title</title>
	
	<meta name="description" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/build.css?v=1.0.6">
	
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|EB+Garamond:400,400i,700,700i|Libre+Baskerville&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d97b24d1b3.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- jQuery Modal -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	
	<script src="js/main.js"></script>
	
</head>
<body class="search">
	  <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	
	<header>
	  	<h1><a href="index.php">Birdsong <span class="script">for the</span> <br />Curious Naturalist</a></h1>
		<nav>
			<a id="toggle-menu" href="#"><i class="fas fa-bars"></i> Menu</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="search.php">Listen &amp; Explore</a></li>
				<li><a href="page.php">Look Inside</a></li>
				<li><a href="learn-more.php">Learn More</a></li>
				<li><a href="page.php">Downloads</a></li>
				<li><a href="#buy-popup" class="open-modal" rel="modal:open">Buy the Book</a></li>
			</ul>
		</nav>
	</header>
	
	<section id="banner" class="internal">
		<div class="title">
			<h1>Page Title</h1>
			<h2>This could be some tagline about what this page contains.</h2>
		</div>
	</section>
	
	<section class="page">
		<div class="wrap tight">
			
			<h2>Title of the Page</h2>
			<h3>Subtitle if needed</h3>
			<p class="lead">This is a larger first paragraph that is accomplished by applying the "lead" class to the p tag.</p>
			<p>This is some other content using a regular paragraph style. This page template can be used for the Downloads or Look Inside pages, or any other pages that have static content.</p>
		
		</div><!--wrap-->
	</section>
	
	<footer class="dark">
		<div class="wrap">
			<p class="center">&copy;2020 Donald Kroodsma. Web design by <a href="http://www.ehwdesign.com" target="_blank">EHW Design.</a></p>
		</div>
	</footer>
	
	<!-- Popup -->
	<div id="buy-popup" class="modal">
		<div class="popup-container">
			<div>
				<img src="img/Curious-Naturalist-book-cover.jpg" alt="Curious Naturalist book cover" width="200px" />
			</div>
			<div>
				<p><em><b>Birdsong for the Curious Naturalist</b></em> is available from the following retailers:</p>
				
				<ul class="buy-links">
					<li><a href="#">Barnes &amp; Noble</a></li>
					<li><a href="#">Indie</a></li>
					<li><a href="#">Amazon</a></li>
					<li><a href="#">Powell's</a></li>
				</ul>
			</div>
		</div>
	</div><!-- Popup -->

</body>
</html>
