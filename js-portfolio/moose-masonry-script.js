// jQuery.noConflict();

jQuery(document).ready(function($) {
   
// This bit sets up jQuery Masonry
	var $container = jQuery('#portfolio-masonry-grid');

	$container.imagesLoaded( function(){

		$container.masonry({
		  	columnWidth: '.grid-sizer',
			itemSelector: '.grid-item',
			isInitLayout: true, //layout kicks in at initialization
			// isOriginLeft: false, //aligns to the right
			isOriginTop: true, //aligns bottom up
			isResizeBound: true, //binds with window resize ... default true
			transitionDuration: '2s',


		});
	});

	// This does the filter by binding an event on the change of a select box
	jQuery("#grid-filter select").on("change", function() {


		group = jQuery(this).val();
		group_class = "." + group;
		
		if(group != "") {
			jQuery(".grid-item").hide();
			jQuery(group_class).show();
			jQuery('#masonry-grid').masonry('layout');
		} else {
			jQuery(".grid-item").show();
			jQuery('#masonry-grid').masonry('layout');
		}
	});



		// BUTTON CLICK

			jQuery("#grid-filter .category").on("click", function() {

				// console.log('clicked');
				// console.log(jQuery(this));
				// console.log(jQuery(this).data('value'));

				var button = jQuery('#grid-filter a').removeClass('active');
				// console.log(button);	

				jQuery(this).addClass('active');

				group = jQuery(this).data('value');

				group_class = "." + group;
				
				if(group != "") {
					jQuery(".grid-item").hide();
					jQuery(group_class).show();
					jQuery('#portfolio-masonry-grid').masonry('layout');
				} else {
					jQuery(".grid-item").show();
					jQuery('#portfolio-masonry-grid').masonry('layout');
				}
			});	
});