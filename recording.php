<?php 
  // This php allows customization
  $bird = (isset($_GET['page']))? $_GET['page'] : 1;
  include "scripts/lookup_php.php"; 
  include "scripts/explore_lookup.php";  
 
?>



<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Birdsong for the Curious Naturalist: Northern Cardinal (#23)</title>
	
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
<body class="single">
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
				<!--<li><a href="page.php">Downloads</a></li>-->
				<li><a href="#buy-popup" class="open-modal" rel="modal:open">Buy the Book</a></li>
			</ul>
		</nav>
	</header>
	
	<section id="content">
		<div class="sidebar">
			<ul id="menu" class="side">

				<li class="back">
					<a href="search.php#chapter-list"><i class="fas fa-book-open"></i> chapter index</a>
				</li>
	  			
	  			<li class="back">
					<a href="search.php#species-list"><i class="fas fa-dove"></i> Species index</a>
				</li>
	  			
				<li class="back">
					<a href="search.php#number-list"><i class="fas fa-hashtag"></i> Number Index</a>
				</li>
	  			
	  			<li class="back">
					<a href="search.php#explore-list"><i class="fas fa-search"></i> Explore index</a>
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
	
		<div class="main">
			
			<h2 class="species-name"><i class="fas fa-dove"></i><?php echo $species_names_headers[$bird] ?> </h2><!--Northern Cardinal</h2> -->
			<h5 class="meta"><a href="search.php#chapter-list"><i class="fas fa-book-open"></i>Chapter <?php echo $web_chapters[$bird] ?>   <!-- Chapter 2:  Birds and Their Sounds--> </a></h5>
			<h5 class="meta"><a href="search.php#chapter-list"><i class="fas fa-list"></i> Subchapter: <?php echo $subchapters[$bird] ?> <!-- Female song, and duets --></a></h5>
			<h5 class="meta"><i class="fas fa-bookmark"></i> From page <?php echo $from_pages[$bird] ?> in the book.</h5>
			
            <?php include('scripts/Species_Image_HTML/'.$species_files[$bird].'_images.html') ;?>
			<!--
			<div class="species-gallery">
				<div>
					<img src="img/noca2.jpg" alt="" />
					<p class="caption">Female; Photo by Marie Read</p>
				</div>
				<div>
					<img src="img/noca1.jpg" alt="" />
					<p class="caption">Male; Photo by Brian E. Small</p>
				</div>
				<div>
					<img src="img/noca2.jpg" alt="" />
					<p class="caption">Female; Photo by Marie Read</p>
				</div>
				
				
			</div>
            -->

			<?php include('scripts/Species_HTML/'.$species_files[$bird].'.html') ?>
			

			<!--
			<p>♫57. As this female leaves the night roost, she initially calls with sharp chip notes, and then sings (first at 0:19). Beginning at 1:33, I focus the microphone on her mate, who is using the same song that the female is singing; they match each other’s songs by choosing appropriately from their shared repertoire of a dozen or so different songs. April 9, 2017. Hatfield, Massachusetts. (2:28)</p>
			<p>Player 57 goes here</p>
			<p>♫58. Later the same morning, she calls and sings again, the male nearby (beginning at 1:23) again matching her with the same song. April 9, 2017. Hatfield, Massachusetts. (1:54)</p>
			<p>Player 58 goes here</p>
			<p>♫59. Seven examples of the female cardinal singing from the nest, with examples separated by fades. A stereo microphone is used, so both relative loudness (nearby female is always much louder than the more distant male) and location in the stereo field can help to identify who is singing. In examples 1-4, the female matches the male’s song; in examples 5-6, no matching; example 7 seems to be an isolated song from the female (though she could, of course, have heard the male in the distance). May 2018. Hatfield, Massachusetts. (4:07)</p>
			<p>Player 59 goes here</p>
			
			<p>Table goes here</p>
			
			<p>♫60. Ten examples of the female singing from the nest. Now a monaural microphone is used (SWIFT—see p. xx in book), so only relative loudness of the songs can identify the individual; again, the loud, near bird is the female. In examples 1-4, the female matches the male’s song; examples 5-8, no matching; examples 9-10, isolated female songs with no male audible. May 2018. Hatfield, Massachusetts. (2:01)</p>
			<p>Player 60 goes here</p>
			
			<p>Table goes here</p>
			-->
            

           <?php if($explores[$bird]!="nan"){

           	$explore_numbers = explode ( ", " , $explores[$bird]);
           	foreach ($explore_numbers as $value){
           		echo "<h5>See also <a href=explore.php?page=";
           		echo $value;
           		echo ">Explore ".$titles_e[intval($value)]."</a></h5>" ;
           	}
           } ?>

			<!-- <h5>See also <a href="#">Explore 9: Singing from the nest by cardinals and grosbeaks.</a></h5> -->
			
			
			<ul class="page-nav">
				<?php  
				    if($bird > 1){
				      echo '<li><a href="?page='.strval($bird-1).' "><i class="fas fa-arrow-left"></i> Previous Species in Book: '.$species_names_headers[$bird-1].'</a></li>'; 
				    } 
				    if($bird < count($web_chapters)-1){
				      echo '<li><a href="?page='.strval($bird+1).'">Next Species in Book: '.$species_names_headers[$bird+1].'<i class="fas fa-arrow-right"></i></a></li>';
				    }

				 ?>
			</ul>
			
			
		</div><!-- main -->
	</section>
	
	<footer class="dark">
		<div class="wrap">
			<p class="center">&copy;2020 Donald Kroodsma. Web design by <a href="http://www.ehwdesign.com" target="_blank">EHW Design.</a></p>
		</div>
	</footer>
	
	<!-- Modal HTML embedded directly into document -->
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
	</div>

</body>
</html>
