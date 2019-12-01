<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Birdsong for the Curious Naturalist: Listen &amp; Explore</title>
	
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
			<h1>Listen &amp; Explore</h1>
			<h2>Subtitle Can Go Here</h2>
		</div>
	</section>
	
	<section id="content">
		<div class="sidebar">
			<ul id="menu" class="side">
				
				<li class="active">
					<a href="#chapter-list"><i class="fas fa-book-open"></i> Listen by Chapter</a>
				</li>
	  			
	  			<li>
					<a href="#species-list"><i class="fas fa-dove"></i> Listen by Species</a>
				</li>
	  			
				<li>
					<a href="#number-list"><i class="fas fa-hashtag"></i> Listen by Number</a>
				</li>
	  			
	  			<li>
					<a href="#explore-list"><i class="fas fa-search"></i> Explore</a>
				</li>
				
			</ul><!--menu-->
			
			<div id="book">
				<div class="cover">
				<img src="img/Curious-Naturalist-book-cover.jpg" alt="Curious Naturalist book cover" width="200px" />
				</div>
				<h5>Buy the book:</h5>
					
					<ul class="buy-links">
						<li><a href="#">Barnes &amp; Noble</a></li>
						<li><a href="#">Indie</a></li>
						<li><a href="#">Amazon</a></li>
						<li><a href="#">Powell's</a></li>
					</ul>
				
			</div>
			
		</div><!--sidebar-->
	
		<div class="main switcher">
			
			<div id="chapter-list" class="switch visible">
				<h2>Search Recordings by Chapter</h2>
				
				<p>Listen by number, as referenced in the book’s text; state abbreviations are added as a prefix. Simply click on any of the 381 numbers, such as CO-280, where you’ll be whisked away to Colorado, listening to yellow-headed blackbirds.</p>
				


				<!--
				<ul class="collapser">
					<li><a href="#"><i class="fas fa-plus-circle"></i> Chapter 2: Birds and Their Sounds</a>
						<ul class="show-hide collapser">
							<li><a href="#"><i class="fas fa-plus-circle"></i> Birds, sing and call</a>
								<ul class="show-hide">
									
									<li><a href="recording.php">Black-capped chickadee</a></li>
									<li><a href="recording.php">White-breasted nuthatch</a></li>
									<li><a href="recording.php">Veery</a></li>
									<li><a href="recording.php">American robin</a></li>
									<li><a href="recording.php">Gray catbird</a></li>
									<li><a href="recording.php">Common yellowthroat</a></li>
									
								</ul>
							</li>
							<li><a href="#"><i class="fas fa-plus-circle"></i> Birds without a song just call</a>
								<ul class="show-hide">
									
									<li><a href="recording.php">Canada goose</a></li>
									<li><a href="recording.php">Mallard</a></li>
									<li><a href="recording.php">Chimney swift</a></li>
									<li><a href="recording.php">Killdeer</a></li>
									<li><a href="recording.php">Double-crested cormorant</a></li>
									<li><a href="recording.php">Red-shouldered hawk</a></li>
									
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Chapter 3: Why and How Birds Sing</a>
						<ul class="show-hide collapser">
							<li><a href="#"><i class="fas fa-plus-circle"></i> Why sing?</a>
								<ul class="show-hide">
									
									<li><a href="recording.php">Eastern whip-poor-will, Mexican whip-poor-will</a></li>
									<li><a href="recording.php">Virginia rail, sora</a></li>
									<li><a href="recording.php">Brown thrasher</a></li>
									<li><a href="recording.php">Black-throated blue warbler</a></li>
									<li><a href="recording.php">Wild turkey</a></li>
									<li><a href="recording.php">Dickcissel</a></li>
									<li><a href="recording.php">Yellow-headed blackbird</a></li>
									
								</ul>
							</li>
						</ul>
					</li>
				</ul>-->
				<?php require('scripts/chapter_lookup.php'); ?>
				
			</div><!--chapter-list-->
			
			<div id="species-list" class="switch">
				<h2>Search Recordings by Species</h2>
				
				<p>Explanation text</p>
				<?php require('scripts/species_lookup.php'); ?>

				<!-- 
				<ul class="collapser">
					<li><a href="#"><i class="fas fa-plus-circle"></i> Ducks, geese</a>
						<ul class="show-hide">
							<li><em>Anatidae</em>
								
								<ul>
									<li>Canada goose, <a href="recording.php">27-29</a></li>
									<li>American wigeon, <a href="recording.php">40</a></li>
									<li>Mallard, <a href="recording.php">30-31</a></li>
									<li>Ruddy duck, <a href="recording.php">64</a></li>
								</ul>
							</li>
						</ul>
						
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Quail, chicken, grouse, turkey, chachalaca</a></li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Grebes, pigeons, doves</a></li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Nightjars</a></li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Thrushes</a></li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Mockingbirds, catbirds, thrashers, starlings</a>
						
						<ul class="show-hide">
							<li><em>Mimidae</em>
								
								<ul>
									<li>Northern mockingbird, <a href="recording.php">238</a>, <a href="recording.php">335-342</a>, <a href="recording.php">463</a>, <a href="recording.php">516-517</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul> -->
			</div><!--species-list-->
			
			
			<div id="number-list" class="switch">
				<h2>Search Recordings by Number</h2>
				
				<h4><i class="fas fa-search"></i> Search for a recording by number:</h4>
				
				<form id="number-search-form" method="post" action="">
					<input type="text" size="10" name="search-string" value="" />
					<input type="button" name="submit" value="Search" />
				</form>
				
				<h4>Or find your number in the following outline of the book:</h4>
				
                <?php require('scripts/recording_lookup.php'); ?>

				
				<!-- <ul class="collapser">
					
					<li><a href="#"><i class="fas fa-plus-circle"></i> 1-26, Birds sing, and call</a>
						
						<ul class="show-hide">
							<li>1-5, <a href="recording.php">Black-capped chickadee</a></li>
							<li>6-11, <a href="recording.php">White-breasted nuthatch</a></li>
							<li>12-13, Veery</li>
							<li>14-21, American robin</li>
							<li>22-23, Gray catbird</li>
							<li>24-26, Common yellowthroat</li>
						</ul>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> 27-41, Birds without a song just call</a>
					
						<ul class="show-hide">
							<li>27-29, Canada goose</li>
							<li>30-31, Mallard</li>
							<li>32, Chimney swift</li>
							<li>33-34, Killdeer</li>
							<li>35, Double-crested cormorant</li>
							<li>36-38, Red-shouldered hawk</li>
							<li>39, Red-bellied woodpecker</li>
							<li>40, American wigeon</li>
							<li>41, Pied-billed grebe</li>
						</ul>
						
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> 42-62, Female song, and duets</a></li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> 63-78, Mechanical (non-vocal) sounds</a></li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> 713-734, Extra! Extra! Bonus!--Australia</a></li>
					
				</ul> -->
			</div><!--number-list-->
			
			
			
			<div id="explore-list" class="switch">
				<h2>Explore</h2>
				<h4>Invitations to explore the world of bird song: 77 projects designed to immerse you in our singing planet
				</h4>
				
				<ul class="collapser">
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 1-10</a>
						<ol class="show-hide">
							<li><a href="explore.php">Chick-a-dee calls of North American chickadees.</a></li>
							<li><a href="explore.php">White-breasted nuthatch songs.</a></li>
							<li><a href="explore.php">American robin songs.</a></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li><a href="explore.php">Singing from the nest by cardinals and grosbeaks.</a></li>
							<li><a href="explore.php">Whistling wings of mourning doves.</a></li>
						</ol>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 11-20</a>
						<ol class="show-hide" start="11">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ol>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 21-30</a>
						<ol class="show-hide" start="21">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ol>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 31-40</a>
						<ol class="show-hide" start="31">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ol>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 41-50</a>
						<ol class="show-hide" start="41">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ol>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 51-60</a>
						<ol class="show-hide" start="51">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ol>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 61-70</a>
						<ol class="show-hide" start="61">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ol>
					</li>
					<li><a href="#"><i class="fas fa-plus-circle"></i> Explore 71-77</a>
						<ol class="show-hide" start="71">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ol>
					</li>
				</ul>
			</div><!--explore-list-->
		</div><!--#main .switcher-->
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
