jQuery('document').ready(function(){	
	var button_height = jQuery('#front-page-enter').height();
	var text_height = jQuery('#front-page-enter p').height();
	var current_offset = jQuery('#front-page-enter p').offset();
	var new_offset = ((button_height/2) - (text_height/2)) + current_offset.top;
	jQuery('#front-page-enter p').offset({top: new_offset});
});