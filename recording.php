<?php 
  // This php allows customization
  $bird = (isset($_GET['page']))? $_GET['page'] : 1;
  include "scripts/lookup_php.php"; 
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
	
	<title>Birdsong for the Curious Naturalist: Northern Cardinal (#23)</title>

    <style>
      p { clear: both; }

      .audiojs { height: 22px; background: #404040;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #444), color-stop(0.5, #555), color-stop(0.51, #444), color-stop(1, #444));
        background-image: -moz-linear-gradient(center top, #444 0%, #555 50%, #444 51%, #444 100%);
        -webkit-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3); -moz-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3);
        -o-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3); box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3); }
      .audiojs .play-pause { width: 25px; height: 20px; padding: 0px 8px 0px 0px; }
      .audiojs p { width: 25px; height: 20px; margin: -3px 0px 0px -1px; }
      .audiojs .scrubber { background: #5a5a5a; width: 180px; height: 10px; margin: 5px; }
      .audiojs .progress { height: 10px; width: 0px; background: #ccc;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ccc), color-stop(0.5, #ddd), color-stop(0.51, #ccc), color-stop(1, #ccc));
        background-image: -moz-linear-gradient(center top, #ccc 0%, #ddd 50%, #ccc 51%, #ccc 100%); }
      .audiojs .loaded { height: 10px; background: #000;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.5, #333), color-stop(0.51, #222), color-stop(1, #222));
        background-image: -moz-linear-gradient(center top, #222 0%, #333 50%, #222 51%, #222 100%); }
      .audiojs .time { float: left; height: 25px; line-height: 25px; }
      .audiojs .error-message { height: 24px;line-height: 24px; }

      .track-details { clear: both; 
      	               height: 20px; 
      	               width: 148px; 
      	               padding: 0px 6px 0px 0px; 
      	              /* background: #eee; 
      	               color: #222; 
      	               font-family: monospace; 
      	               font-size: 11px; 
      	               line-height: 20px;*/
                       /*-webkit-box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.15); -moz-box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.15);*/
                        }
      .track-details:before { content: ''; }
      .track-details em { font-style: normal; color: #999; }
    </style>



	
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
    <!--   <script src="./jquery.js"></script> -->

	<script src="js/audio.js?2"></script>
	<script>
      var a = audiojs;
      a.events.ready(function() {
        var a1 = a.createAll();
      });
    </script>

	<?php include("g-tracking.php"); ?>

	
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
               <?php include "header.php"; ?>

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
<?php include "buy-links.php" ?>
					</ul>
				
			</div>
			
		</div><!--sidebar-->
	
		<div class="main">
			
			<h2 class="species-name"><i class="fas fa-dove"></i><?php echo $species_names_headers[$bird] ?> </h2><!--Northern Cardinal</h2> -->
			<h5 class="meta"><a href="search.php?expand=<?php 
               echo webify_title($web_chapters[$bird]);
			?>#chapter-list"><i class="fas fa-book-open"></i>Chapter <?php echo $web_chapters[$bird] ?>   <!-- Chapter 2:  Birds and Their Sounds--> </a></h5>
			<h5 class="meta"><a href="search.php?expand=<?php echo webify_title($web_chapters[$bird]);?>&expand2=<?php echo webify_title($subchapters[$bird] ); ?>#chapter-list">
				<i class="fas fa-list"></i> Subchapter: <?php echo $subchapters[$bird] ?> <!-- Female song, and duets --></a></h5>
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
            

           <?php if($explores[$bird]!=""){

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
<?php include "buy-links.php" ?>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>
