<?php 
  // This php allows customization
  $page = (isset($_GET['page']))? $_GET['page'] : 1;
  header("Location: http://www.birdsongforthecurious.com/recording.php?page=".strval($page));
 
?>



