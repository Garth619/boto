jQuery( document ).ready(function() {
	
  jQuery("#content").isotope({
    itemSelector: ".module",
    layoutMode: "packery"
  });
  

  jQuery("body").delay(300).addClass("loaded");
  jQuery( "input#choice_4_3" ).removeProp("checked");
  jQuery( "input#choice_4_4" ).removeProp("checked");
  jQuery( "input#choice_4_0" ).removeProp("checked");
  jQuery( "input#choice_4_1" ).removeProp("checked");
  jQuery( "input#choice_4_2" ).removeProp("checked");
	

});
/*
		  jQuery("#label_1star").click(function() {
  	    jQuery("input.gform_hidden").val("1star");
  	  });
  	  
		  
	    jQuery("#label_2star").click(function() {
  	    jQuery("input.gform_hidden").val("2star");
  	  });
		  
	    jQuery("#label_3star").click(function() {
  	    jQuery("input.gform_hidden").val("3starz");
  	  });
*/

	  	jQuery("label.star-1").click(function() {
  		  jQuery(".review_links").hide(function() {
					jQuery(".gform-wrap").fadeIn();
				});
				ga('send', 'event', 'star', 'click', '1star');
  		});
			
	  	jQuery("label.star-2").click(function() {
  		  jQuery(".review_links").hide(function() {
					jQuery(".gform-wrap").fadeIn();
				});
				ga('send', 'event', 'star', 'click', '2star');
 			});
			
	  	jQuery("label.star-3").click(function() {
  		  jQuery(".review_links").hide(function() {
					jQuery(".gform-wrap").fadeIn();
				});
				ga('send', 'event', 'star', 'click', '3star');
  		});
  		
	  	jQuery("label.star-4").click(function() {
  		  jQuery(".gform-wrap").hide(function() {
					jQuery('.review_links').fadeIn();
				});
				ga('send', 'event', 'star', 'click', '4star');
  		});
			
	  	jQuery("label.star-5").click(function() {
  		  jQuery(".gform-wrap").hide(function() {
					jQuery('.review_links').fadeIn();
				});
				ga('send', 'event', 'star', 'click', '5star');
  		});
  	

//hide the stars after click
jQuery(document).on("click", "#feedback .stars label", function () {
	jQuery( "#feedback .stars" ).fadeOut();
	jQuery( "#feedback" ).append("<p>Thank you!</p>");
});
jQuery(document).on("click", ".trigger-overlay.close", function () {
	jQuery('.review_links').hide();
	jQuery('.gform-wrap').hide();
});


// open menu in modal dialog
jQuery(document).on("click", "#menu-box .trigger-overlay, #header .trigger-overlay.menu", function () {
	jQuery("#menu-box .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#menu-box .overlay").toggleClass("open");
	jQuery("#menu-box .trigger-overlay.close").show()
});
// open About Us in modal dialog
jQuery(document).on("click", "#aboutus .trigger-overlay, #header .trigger-overlay.aboutus", function () {
	jQuery("#aboutus .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#aboutus .overlay").toggleClass("open");
	jQuery("#aboutus .trigger-overlay.close").show()
});
// open feedback form in modal dialog
jQuery(document).on("click", "#feedback #ratingsForm .stars label, #feedback .trigger-overlay.close", function () {
	jQuery("#feedback .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#feedback .overlay").toggleClass("open");
	jQuery("#feedback .trigger-overlay.close").show()
	
});
// open Custom Reviews Form in modal dialog
jQuery(document).on("click", "#customer_reviews .trigger-overlay", function () {
	jQuery("#customer_reviews .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#customer_reviews .overlay").toggleClass("open");
	jQuery("#customer_reviews .trigger-overlay.close").show();

});
jQuery(document).on("click", "#customer_reviews label", function () {
	jQuery("#feedback .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#feedback .overlay").toggleClass("open");
	jQuery("#feedback .trigger-overlay.close").show();
	
	jQuery("#customer_reviews .overlay").toggleClass("open");
	jQuery('.review_links').hide();

});
// open E-Club form in modal dialog
jQuery(document).on("click", "#eclub .trigger-overlay", function () {
	jQuery("#eclub .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#eclub .overlay").toggleClass("open");
	jQuery("#eclub .trigger-overlay.close").show()
});
// open Meet The chefs form in modal dialog
jQuery(document).on("click", "#meetchef .trigger-overlay", function () {
	jQuery("#meetchef .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#meetchef .overlay").toggleClass("open");
	jQuery("#meetchef .trigger-overlay.close").show()
});
// show specific chef bio
jQuery(document).on("click", "#meetchef .trigger-overlay.1", function () {
	jQuery(".chef.1").show();
});
jQuery(document).on("click", "#meetchef .trigger-overlay.2", function () {
	jQuery(".chef.2").show();
});
jQuery(document).on("click", "#meetchef .trigger-overlay.3", function () {
	jQuery(".chef.3").show();
});
jQuery(document).on("click", "#meetchef .trigger-overlay.4", function () {
	jQuery(".chef.4").show();
	
});
jQuery(document).on("click", "#meetchef .trigger-overlay.close", function () {
	jQuery(".chef").delay(1000).fadeOut();
});
// open E-Club form in modal dialog
jQuery(document).on("click", "#catering .trigger-overlay", function () {
	jQuery("#catering .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#catering .overlay").toggleClass("open");
	jQuery("#catering .trigger-overlay.close").show()
});
// open FiveStar form in modal dialog
jQuery(document).on("click", "#fivestar .trigger-overlay", function () {
	jQuery("#fivestar .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#fivestar .overlay").toggleClass("open");
	jQuery("#fivestar .trigger-overlay.close").show()
});



