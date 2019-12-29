<?php 
  $expand = (isset($_GET['expand']))? $_GET['expand'] : 0;
  $expand2 = (isset($_GET['expand2']))? $_GET['expand2'] : 0;
?>

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


<body class="search" onload="open_dropdown()">

    <script language="javascript">  

       function open_dropdown(){
       	   var expand = "<?php echo $expand; ?>";
       	   var expand2 = "<?php echo $expand2; ?>";
           if(expand!="0"){
              	var elmnt = document.getElementById(expand);
           	    elmnt.click();
           	    if(expand2!="0"){
                  	var elmnt = document.getElementById(expand2);
           	        elmnt.click();          	    	
           	    }
           	    elmnt.scrollIntoView();
           }

          }
          function update_url(new_url){
          	window.history.pushState('page2', 'Title', new_url);
          }




	</script>
	  <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	
	  <header>
	  	<h1><a href="index.php">Birdsong <span class="script">for the</span> <br />Curious Naturalist</a></h1>
		<nav>
			<a id="toggle-menu" href="#"><i class="fas fa-bars"></i> Menu</a>
			<ul>
               <?php include "header.php"; ?>
			</ul>
		</nav>
	</header>
	
	<section id="banner" class="internal">
		
		<div class="title">
			<h1>Listen &amp; Explore</h1>
			<!-- <h2>Subtitle Can Go Here</h2> -->
		</div>
	</section>
	
	<section id="content">
		<div class="sidebar">
			<ul id="menu" class="side">			
				<li class="active">
					<a href="#chapter-list" onclick='update_url("search.php#chapter-list")'><i class="fas fa-book-open"></i> Listen by Chapter</a>
				</li>
	  			
	  			<li>
					<a href="#species-list" onclick='update_url("search.php#species-list")'><i class="fas fa-dove"></i> Listen by Species</a>
				</li>
	  			
				<li>
					<a href="#number-list" onclick='update_url("search.php#number-list")'><i class="fas fa-hashtag"></i> Listen by Number</a>
				</li>
	  			
	  			<li>
					<a href="#explore-list" onclick='update_url("search.php#explore-list")'><i class="fas fa-search"></i> Explore</a>
				</li>
				
			</ul><!--menu-->
			
			<div id="book">
				<div class="cover">
				<img src="img/Curious-Naturalist-book-cover.jpg" alt="Curious Naturalist book cover" width="200px" />
				</div>
				<h5>Buy the book:</h5>
					
					<ul class="buy-links">
<?php include "buy-links.php" ?>
					</ul>
				
			</div>
			
		</div><!--sidebar-->
	
		<div class="main switcher">
			
			<div id="chapter-list" class="switch visible">
				<h2>Search Recordings by Chapter</h2>
				
				<p>Expand the series of chapter and subchapter headings to find the species discussed there.</p>
				

				<?php require('scripts/chapter_lookup.php'); ?>
				
			</div><!--chapter-list-->
			
			<div id="species-list" class="switch">
				<h2>Search Recordings by Species</h2>
				
				<p>Expand the taxonomic groupings to find your species. </p> 
				<?php require('scripts/species_lookup.php'); ?>


			</div><!--species-list-->
			
			
			<div id="number-list" class="switch">
				<h2>Search Recordings by Number</h2>
				
				<!-- <h4><i class="fas fa-search"></i> Search for a recording by number:</h4> 
				
				<form id="number-search-form" method="post" action="">
					<input type="text" size="10" name="search-string" value="" />
					<input type="button" name="submit" value="Search" />
				</form>-->
				
				<h4>Find your number in the following outline of the book:</h4>
				
                <?php require('scripts/recording_lookup.php'); ?>

			</div><!--number-list-->
			
			
			
			<div id="explore-list" class="switch">
				<h2>Explore</h2>
				<h4>Invitations to explore the world of bird song: 77 projects designed to immerse you in our singing planet
				</h4>
				
				<ul class="collapser">
				  <?php require('scripts/explore_index.php'); ?>
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
<?php include "buy-links.php"; ?>
				</ul>
			</div>
		</div>
	</div><!-- Popup -->

</body>
</html>
