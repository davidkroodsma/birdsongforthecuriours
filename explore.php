<?php 
  // This php allows customization
  $page = (isset($_GET['page']))? $_GET['page'] : 1;
  include "scripts/explore_lookup.php";  

  function webify_title($x) {
       $x = str_replace(" ","_",$x);
       $x = str_replace(":","",$x);
       $x = str_replace(".","",$x);
       $x = str_replace(";","",$x);
       $x = str_replace(",","",$x);
        #   return x.replace(" ","_").replace(":","").replace(".","").replace(";","")
       return $x;

   }
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Birdsong for the Curious Naturalist: Explore #7</title>
	
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
	<?php include("g-tracking.php"); ?>

	
</head>
<body class="explore">
	  <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	
	  <header>
	  	<h1><a href="index.php">Birdsong <span class="script">for the</span> <br />Curious Naturalist</a></h1>
		<nav>
			<a id="toggle-menu" href="#"><i class="fas fa-bars"></i> Menu</a>
			<ul>
<?php include "header.php" ?>
			</ul>
		</nav>
	</header>
	
	<section id="content">
		<div class="sidebar">
			<ul id="menu" class="side">

				<li class="back">
					<a href="search.php#chapter-list"><i class="fas fa-book-open"></i> Chapter index</a>
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
<?php include "buy-links.php" ?>

					</ul>
				
			</div>
			
		</div><!--sidebar-->
	
		<div class="main">
			
			<h2><i class="fas fa-search"></i> <?php echo($titles_e[$page]);?><!--Explore #1: Chick-a-dee calls of North American chickadees.--></h2>
			<h5 class="meta"><a href="search.php?expand=<?php 
               echo webify_title($chapters_e[$page]);
			?>#chapter-list"><i class="fas fa-book-open"></i> Chapter 2:  Birds and Their Sounds</a></h5>
			<h5><a href="search.php?expand=<?php echo webify_title($chapters_e[$page]);?>&expand2=<?php echo webify_title($subchapters_e[$page] ); ?>#chapter-list"><i class="fas fa-list"></i> <?php echo $subchapters_e[$page]; ?></a></h5>
			<h5 class="meta"><i class="fas fa-bookmark"></i> From page <?php echo $from_pages_e[$page]; ?> in the book.</h5>
             
            <?php  include('scripts/Explore_HTML/'.strval($page).'.html') ;
             // echo "hello" ;//'scripts/Explore_HTML/'.str($page).'.html';
            ;?>
			<!--<p>Chick-a-dee calls of North American chickadees. Chickadees occur in one form or another throughout most of North America (besides the black-capped, the four others most frequently encountered are the Carolina, mountain, chestnut-backed, and boreal chickadees). They are common birds, especially at our winter feeders, and they all chick-a-dee-dee-dee in their own style (faster, slower, hoarser, etc.). Get to know chickadees better by counting the number of dee notes in their calls under a variety of circumstances. Then maybe try to manipulate the circumstance. Introduce a plastic owl near a feeder, for example, and listen to how the chickadees react. Or introduce a cat into the yard (but, heavens, only briefly!). Use your imagination as to what you think might be of concern to a chickadee, and then document how they adjust their chick-a-dee calls. You can practice your listening and counting with the chick-a-dee examples I provide on the website for the book.</p>-->
<!-- 			
			<ul class="page-nav">
				<li><a href="#"><i class="fas fa-arrow-left"></i> Previous Explore</a></li>
				<li><a href="#">Next Explore <i class="fas fa-arrow-right"></i></a></li>
			</ul>
 -->

			<ul class="page-nav">
				<?php  
				    if($page > 1){
				      echo '<li><a href="?page='.strval($page-1).' "><i class="fas fa-arrow-left"></i> Previous Explore: '.$titles_e[$page-1].'</a></li>'; 
				    } 
				    if($page < count($titles_e)-1){
				      echo '<li><a href="?page='.strval($page+1).'">Next Explore: '.$titles_e[$page+1].'<i class="fas fa-arrow-right"></i></a></li>';
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
<?php include "buy-links.php" ?>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>
