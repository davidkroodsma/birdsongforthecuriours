<?php 
  // This php allows customization
  $page = (isset($_GET['page']))? $_GET['page'] : 1;
  include "scripts/explore_lookup.php";  
//   $titles=["0","1.  Chick-a-dee calls of North American chickadees.","2.  White-breasted nuthatch songs.","3.  American robin songs.","4.  Mallard quacks and rab-rabs.","5.  When and why do chimney swifts twitter?","6.  Red-shouldered hawk counting games.","7.  Duets by Carolina wrens and wrentits.","8.  Listening to female red-winged blackbirds.","9.  Singing from the nest by cardinals and grosbeaks.","10.  Whistling wings of mourning doves.","11.  Peenting and VROOMing common nighthawks.","12.  Winnows of Wilson’s snipe.","13.  The “double-strike” of sapsuckers.","14.  Indefatigable, bachelor males advertising for a mate.","15.  Singing for more and more mates.","16.  Listening for courtship songs.","17.  The puzzling case of the California thrasher.","18.  Bird brains and special song control neurons.","19.  Memories of birds and human listeners.","20.  Seeing the two voices of birds in sonagrams.","21.  Playing songs at slower speeds, lower frequencies.","22.  No dialects in the innate songs of flycatchers, doves, etc. .","23.  Improvised songs of red-eyed vireos.","24.  The practice singing of young songbirds.","25.  Listening for practice singing during spring.","26.  Neighboring male songbirds learn from each other.","27.  Call matching by ravens, jays, and other corvids.","28.  Song matching by neighboring western male marsh wrens.","29.  Song matching by titmice.","30.  Dialects in black-capped chickadee songs.","31.  Bicycling among dickcissel song dialects.","32.  A road-trip through white-throated sparrow song dialects.","33.  Call matching by male red-winged blackbirds.","34.  Mockingbird mimicry.","35.  Tuning your ears to hear mimicry.","36.  Scaling song complexity.","37.  How phoebes use their two to three songs.","38.  Songs of ruby-crowned kinglets.","39.  Seeing the magnificence of hermit thrush songs.","40.  Getting to know song repertoires of individual birds.","41.  Patience in listening to songs of a brown thrasher.","42.  Once you are attuned, every singing bird becomes interesting.","43.  Song packages of the Philadelphia vireo.","44.  Listening for chat song packages.","45.  Song packages of yellow-throated vireos.","46.  Listening for patterns in how songbirds present their song repertoires.","47. What do songless songbirds do during the dawn chorus?","48. Dawn calling choruses in Swainson’s thrushes and veeries.","49. Mockingbird calls at dusk and dawn.","50. Cardinals awaking—13 mornings to explore!","51. Exploring horned lark singing with Raven Lite.","52. Warbler dawn choruses are special.","53. Individuality among red-winged blackbirds.","54. An extreme blackbird challenge for you!","55. The thrill of dawn-singing Brewer’s sparrows.","56. You can unravel the case of clay-colored sparrows.","57. Choose your own dawn chorus experience.","58. Night singers!","59. Owling.","60. Purple martin song flights.","61. Sage thrasher songs, through the night.","62. Flight songs of ovenbirds.","63. Get to know the American woodcock.","64. Dawn song flights of tree swallows.","65. Prairie flight songs. ","66. Just when do birds sing in flight?","67. Recognizing individuals by their songs.","68. Discovering new species by their songs.","69. Just what is a “species”?","70. The joy of western meadowlark songs.","71. Song changes over evolutionary time.","72. The curious case of pitch-shifting black-capped chickadees.","73. Themes and variations in birdsong.","74. Exploring birdsong with human musicians.","75. Birdsong and musicality. ","76. Get to know this wren!","77. Develop your own list of favored musicians."];
//  $explore_files=['0','1.html','2.html','3.html','4.html','5.html','6.html','7.html','8.html','9.html','10.html','11.html','12.html','13.html','14.html','15.html','16.html','17.html','18.html','19.html','20.html','21.html','22.html','23.html','24.html','25.html','26.html','27.html','28.html','29.html','30.html','31.html','32.html','33.html','34.html','35.html','36.html','37.html','38.html','39.html','40.html','41.html','42.html','43.html','44.html','45.html','46.html','47.html','48.html','49.html','50.html','51.html','52.html','53.html','54.html','55.html','56.html','57.html','58.html','59.html','60.html','61.html','62.html','63.html','64.html','65.html','66.html','67.html','68.html','69.html','70.html','71.html','72.html','73.html','74.html','75.html','76.html','77.html'];
// $chapters=['0','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','2. Birds and Their Sounds','3. Why and How Birds Sing','3. Why and How Birds Sing','3. Why and How Birds Sing','3. Why and How Birds Sing','3. Why and How Birds Sing','3. Why and How Birds Sing','3. Why and How Birds Sing','3. Why and How Birds Sing','4. How a Bird Gets Its Song','4. How a Bird Gets Its Song','4. How a Bird Gets Its Song','4. How a Bird Gets Its Song','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','5. More about Song Learning','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','6. Song Learning Often Creates Complex Songs and Large Repertoires','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','7. When to Sing, and How ','8. How Songs Change over Space and Time','8. How Songs Change over Space and Time','8. How Songs Change over Space and Time','8. How Songs Change over Space and Time','8. How Songs Change over Space and Time','9. Music to Our Ears','9. Music to Our Ears','9. Music to Our Ears','9. Music to Our Ears','9. Music to Our Ears','9. Music to Our Ears'];
// $subchapters=["0","Birds sing and call","Birds sing and call","Birds sing and call","Birds without a song just call","Birds without a song just call","Birds without a song just call","Female song and duets","Female song and duets","Female song and duets","Mechanical (non-vocal) sounds","Mechanical (non-vocal) sounds","Mechanical (non-vocal) sounds","Mechanical (non-vocal) sounds","Why sing?","Why sing?","Courtship songs","Singing in the brain","Singing in the brain","Singing in the brain","Not one, but two voice boxes","What birds hear","Inborn songs","Improvised songs","Learned songs of songbirds, and babbling","Learned songs of songbirds, and babbling","Big decisions: When, where, and from whom to learn","Song (and call) matching","Song (and call) matching","Song (and call) matching","Song (and call) dialects","Song (and call) dialects","Song (and call) dialects","Song (and call) dialects","Mimicry","Mimicry","Song complexity","Small to large repertoires","Small to large repertoires","Small to large repertoires","Small to large repertoires","Small to large repertoires","How a repertoire is delivered","How a repertoire is delivered","How a repertoire is delivered","How a repertoire is delivered","How a repertoire is delivered","What? "Songbirds" with no song?","How birds go to roost and awake","How birds go to roost and awake","How birds go to roost and awake","Energized dawn singing","Energized dawn singing","Energized dawn singing","Energized dawn singing","Energized dawn singing","Energized dawn singing","Energized dawn singing","Night singing","Night singing","Night singing","Night singing","Night singing","Songs and calls in flight","Songs and calls in flight","Songs and calls in flight","Songs and calls in flight","Each individual has its own song","Each species has its own song","Each species has its own song","Song changes over evolutionary time","Song changes over evolutionary time","The music in birdsong","The music in birdsong","The music in birdsong","More music to our ears","Music to my ears—author's choice","Music to my ears—author's choice"];
// //$from_pages=['0','8','9','11','12','13','14','18','19','21','21','22','23','25','28','30','32','34','36','37','41','43','47','48','52','55','58','59','61','63','65','66','68','71','75','77','83','85','86','89','90','94','97','100','101','101','103','107','111','111','112','115','116','119','120','122','123','123','124','125','127','127','129','131','133','135','136','140','142','146','151','152','156','158','160','164','168','168'];

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
						<li><a href="https://www.barnesandnoble.com/w/birdsong-for-the-curious-naturalist-donald-kroodsma/1132304327?ean=9781328919113&st=PLA&sid=BNB_ADL+Core+Generic+Books+-+Desktop+Medium&sourceId=PLAGoNA&dpid=tdtve346c&2sid=Google_c&gclid=Cj0KCQiAuefvBRDXARIsAFEOQ9FVucYZ54Er5pO_PsxqgOSNs-agI7rpfBvlonM3nLGeZ496vrleLz4aAtbkEALw_wcB">Barhttps://www.barnesandnoble.com/w/birdsong-for-the-curious-naturalist-donald-kroodsma/1132304327?ean=9781328919113&st=PLA&sid=BNB_ADL+Core+Generic+Books+-+Desktop+Medium&sourceId=PLAGoNA&dpid=tdtve346c&2sid=Google_c&gclid=Cj0KCQiAuefvBRDXARIsAFEOQ9FVucYZ54Er5pO_PsxqgOSNs-agI7rpfBvlonM3nLGeZ496vrleLz4aAtbkEALw_wcBnes &amp; Noble</a></li>
						<li><a href="https://www.indiebound.org/search/book?keys=birdsong+for+the+curious+naturalist">Indie</a></li>
						<li><a href="https://www.amazon.com/gp/product/B07SZBFXR9?pf_rd_p=ab873d20-a0ca-439b-ac45-cd78f07a84d8&pf_rd_r=Y8DS8WQXNDQEMXQZT9NT">Amazon</a></li>
						<li><a href="https://www.powells.com/searchresults?keyword=birdsong+for+the+curious+naturalist">Powell's</a></li>
					</ul>
				
			</div>
			
		</div><!--sidebar-->
	
		<div class="main">
			
			<h2><i class="fas fa-search"></i> <?php echo($titles_e[$page]);?><!--Explore #1: Chick-a-dee calls of North American chickadees.--></h2>
			<h5 class="meta"><a href="search.php#chapter-list"><i class="fas fa-book-open"></i> Chapter 2:  Birds and Their Sounds</a></h5>
			<h5><a href="search.php#chapter-list"><i class="fas fa-list"></i> <?php echo $subchapters_e[$page]; ?></a></h5>
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
					<li><a href="https://www.barnesandnoble.com/w/birdsong-for-the-curious-naturalist-donald-kroodsma/1132304327?ean=9781328919113&st=PLA&sid=BNB_ADL+Core+Generic+Books+-+Desktop+Medium&sourceId=PLAGoNA&dpid=tdtve346c&2sid=Google_c&gclid=Cj0KCQiAuefvBRDXARIsAFEOQ9FVucYZ54Er5pO_PsxqgOSNs-agI7rpfBvlonM3nLGeZ496vrleLz4aAtbkEALw_wcB">Barnes &amp; Noble</a></li>
					<li><a href="https://www.indiebound.org/search/book?keys=birdsong+for+the+curious+naturalist">Indie</a></li>
					<li><a href="https://www.amazon.com/gp/product/B07SZBFXR9?pf_rd_p=ab873d20-a0ca-439b-ac45-cd78f07a84d8&pf_rd_r=Y8DS8WQXNDQEMXQZT9NT">Amazon</a></li>
					<li><a href="https://www.powells.com/searchresults?keyword=birdsong+for+the+curious+naturalist">Powell's</a></li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>
