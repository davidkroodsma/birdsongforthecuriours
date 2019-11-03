$(document).ready(function() {
	$('html').removeClass('no-js');
	
	//  menu toggle
	$("#toggle-menu").click(function(e) {
	    e.preventDefault();
	    $("nav ul").toggleClass('open');
	});
	
	// open the popup modal window
	$('a.open-modal').click(function(event) {
	  $(this).modal({
	    fadeDuration: 150,
	    fadeDelay: 0.50
	  });
	  return false;
	});

	// index toggles
	$("#menu.side a").not(".back a").click(function(e){
		// prevent scrolling to anchor
		e.preventDefault();
		
		var tar = $(this).attr("href");
		// add visible class to the target index
	    $(tar).addClass("visible");
	    // remove visible class from sibling index divs
	    $(tar).siblings(".switch").not(tar).removeClass("visible");
	    // add active class to this menu item
	    $(this).closest("li").addClass("active");
	    // remove active class from other menu items
	    $(this).closest("li").siblings("li").removeClass("active");
	});
	
	// collapse ul sub-lists
	$(".collapser > li > a").click(function(e){
		// prevent scrolling and changing url hash
		e.preventDefault();
		// add visible class to child .show-hide element
		$(this).parent("li").children(".show-hide").toggleClass("visible");
		// toggle the +/- icons
		$(this).children("i").toggleClass("fa-plus-circle").toggleClass("fa-minus-circle");
	});
	
	// show/hide content based on url hash when navigating between pages
	if (window.location.hash) {
	  // prevent scrolling to anchor
	  setTimeout(function() {
	    window.scrollTo(0, 0);
	  }, 1);
	  
	  // identify id of index from url hash 
	  var hash = window.location.hash;
	  if (hash) {
	  	  // add visible class to the hash target
	      $(hash).addClass("visible");
	      // hide other indices
	      $(hash).siblings(".switch").not(hash).removeClass("visible");
	      // get position of targeted element within parent, returns integer from 0 to 3
	      var ind = $(".switcher .switch").index($(hash));
		  // use integer to target equivalent menu item
	      var menu = $("#menu li").eq(ind);
	      // add active class to this menu item
	      $(menu).addClass("active");
	      // remove active class from other menu items
	      $(menu).siblings("#menu li").removeClass("active");
	  }; 
	}
	
	
});