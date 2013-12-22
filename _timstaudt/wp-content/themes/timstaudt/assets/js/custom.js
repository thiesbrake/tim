jQuery(document).ready(function ($) {
	
	$('#responsive-menu-button').sidr({
      name: 'sidr-main',
      source: '#navigation'
	});

	$('.visual').first().fitText(1.2, { minFontSize: '20px', maxFontSize: '68px' });

});