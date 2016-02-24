// script
jQuery('document').ready(function(){
	/* Make each posts div a square */
	jQuery('.item-wrap').each(function(){
		var width = jQuery(this).width();
		jQuery(this).height(width);
		jQuery(this).find('.item-rollover').height(width);
	});
	/* Add hover event handlers to posts divs */
	jQuery('.item-wrap').hover(function(){
		jQuery(this).find('.item-rollover').show();
	}, function(){
		jQuery(this).find('.item-rollover').hide();
	});
	/* Re calculate height to maintain square on browser window resize */
	jQuery(window).on('resize', function(){
		jQuery('.item-wrap').each(function(){
			var width = jQuery(this).width();
			jQuery(this).height(width);
			jQuery(this).find('.item-rollover').height(width);
		});
	});
});