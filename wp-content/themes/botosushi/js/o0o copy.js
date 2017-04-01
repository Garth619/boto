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
// The following fixes the bug that allows forms to send without being filled out. Basically the gform dropdown that is hidden needs to still have the value applied because otherwise the form will send without needing a value 
jQuery(document).on("touchstart click", "div.stars input#choice_4_0.star", function () {
	jQuery( "input#choice_1_4_0" ).prop( "checked", true );
	jQuery( "input#choice_1_4_3" ).removeProp("checked");
	jQuery( "input#choice_1_4_4" ).removeProp("checked");

});
jQuery(document).on("touchstart click", "div.stars input#choice_4_1.star", function () {
	jQuery( "input#choice_1_4_1" ).prop( "checked", true );
	jQuery( "input#choice_1_4_3" ).removeProp("checked");
	jQuery( "input#choice_1_4_4" ).removeProp("checked");

});
jQuery(document).on("touchstart click", "div.stars input#choice_4_2.star", function () {
	jQuery( "input#choice_1_4_2" ).prop( "checked", true );
	jQuery( "input#choice_1_4_3" ).removeProp("checked");
	jQuery( "input#choice_1_4_4" ).removeProp("checked");

});
jQuery(document).on("touchstart click", "div.stars input#choice_4_3.star", function () {
	jQuery( "input#choice_1_4_3" ).prop( "checked", true );
	jQuery( "input#choice_1_4_0" ).removeProp("checked");
	jQuery( "input#choice_1_4_1" ).removeProp("checked");
	jQuery( "input#choice_1_4_2" ).removeProp("checked");
});
jQuery(document).on("touchstart click", "div.stars input#choice_4_4.star", function () {
	jQuery( "input#choice_4_4" ).prop( "checked", true );
	jQuery( "input#choice_4_0" ).removeProp("checked");
	jQuery( "input#choice_4_1" ).removeProp("checked");
	jQuery( "input#choice_4_2" ).removeProp("checked");
});

//hide the stars after click
jQuery(document).on("touchstart click", "div.stars input", function () {
	jQuery( "#ratingsForm .stars" ).fadeOut();
	jQuery( "#feedback" ).append("<p>Thank you!</p>")
});

// open menu in modal dialog
jQuery(document).on("touchstart click", "#menu-box .trigger-overlay, #header .trigger-overlay.menu", function () {
	jQuery("#menu-box .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#menu-box .overlay").toggleClass("open");
	jQuery("#menu-box .trigger-overlay.close").show()
	jQuery("#menu-box .gform-wrap").removeClass("expand")
	jQuery("#menu-box .deals-cta").show()
});
// open About Us in modal dialog
jQuery(document).on("touchstart click", "#aboutus .trigger-overlay, #header .trigger-overlay.aboutus", function () {
	jQuery("#aboutus .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#aboutus .overlay").toggleClass("open");
	jQuery("#aboutus .trigger-overlay.close").show()
	jQuery("#aboutus .gform-wrap").removeClass("expand")
	jQuery("#aboutus .deals-cta").show()
});
// open feedback form in modal dialog
jQuery(document).on("touchstart click", "#feedback .stars input, #feedback .trigger-overlay.close", function () {
	jQuery("#feedback .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#feedback .overlay").toggleClass("open");
	jQuery("#feedback .trigger-overlay.close").show()
	jQuery("#feedback .gform-wrap").removeClass("expand")
	jQuery("#feedback .deals-cta").show()
});
// open Custom Reviews Form in modal dialog
jQuery(document).on("touchstart click", "#customer_reviews .trigger-overlay, #customer_reviews input", function () {
	jQuery("#customer_reviews .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#customer_reviews .overlay").toggleClass("open");
	jQuery("#customer_reviews .trigger-overlay.close").show()
	jQuery("#customer_reviews .gform-wrap").removeClass("expand")
	jQuery("#customer_reviews .deals-cta").show()
	jQuery( "#ratingsForm .stars" ).show();
});
// open E-Club form in modal dialog
jQuery(document).on("touchstart click", "#eclub .trigger-overlay", function () {
	jQuery("#eclub .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#eclub .overlay").toggleClass("open");
	jQuery("#eclub .trigger-overlay.close").show()
	jQuery("#eclub .gform-wrap").removeClass("expand")
	jQuery("#eclub .deals-cta").show()
});
// open Meet The chefs form in modal dialog
jQuery(document).on("touchstart click", "#meetchef .trigger-overlay", function () {
	jQuery("#meetchef .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#meetchef .overlay").toggleClass("open");
	jQuery("#meetchef .trigger-overlay.close").show()
	jQuery("#meetchef .gform-wrap").removeClass("expand")
	jQuery("#meetchef .deals-cta").show()
});
// show specific chef bio
jQuery(document).on("touchstart click", "#meetchef .trigger-overlay.1", function () {
	jQuery(".chef.1").show();
});
jQuery(document).on("touchstart click", "#meetchef .trigger-overlay.2", function () {
	jQuery(".chef.2").show();
});
jQuery(document).on("touchstart click", "#meetchef .trigger-overlay.3", function () {
	jQuery(".chef.3").show();
});
jQuery(document).on("touchstart click", "#meetchef .trigger-overlay.4", function () {
	jQuery(".chef.4").show();
	
});
jQuery(document).on("touchstart click", "#meetchef .trigger-overlay.close", function () {
	jQuery(".chef").delay(1000).fadeOut();
});
// open E-Club form in modal dialog
jQuery(document).on("touchstart click", "#catering .trigger-overlay", function () {
	jQuery("#catering .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#catering .overlay").toggleClass("open");
	jQuery("#catering .trigger-overlay.close").show()
	jQuery("#catering .gform-wrap").removeClass("expand")
	jQuery("#catering .deals-cta").show()
});
// open FiveStar form in modal dialog
jQuery(document).on("touchstart click", "#fivestar .trigger-overlay", function () {
	jQuery("#fivestar .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#fivestar .overlay").toggleClass("open");
	jQuery("#fivestar .trigger-overlay.close").show()
	jQuery("#fivestar .gform-wrap").removeClass("expand")
	jQuery("#fivestar .deals-cta").show()
});



