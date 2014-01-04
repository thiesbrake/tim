/*
	Mobiform - Plugin
	Author Thies Brake
	For artundweise GmbH
*/
(function($){

  	$.fn.backdrop = function( options ) {  
		var settings = {};
    	
		if(options)$.extend(settings,options);
		
		return this.each(function(){

			

			var $this = $(this);

			console.log($this)

			

		});

  	};
})( jQuery );
