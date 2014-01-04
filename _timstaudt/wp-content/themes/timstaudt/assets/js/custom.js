jQuery(document).ready(function ($) {
	
	$('#responsive-menu-button').sidr({
      name: 'sidr-main',
      source: '#navigation'
	});

	// $('.visual').first().fitText(1.2, { minFontSize: '20px', maxFontSize: '68px' });

	var altText = $('.img-wrapper').find('img').attr('alt');

	// Initialise "Label-Float" on any keypress
	$(this).find('#section-visual').css("background-color", "altText");

});