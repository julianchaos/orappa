jQuery(function () {
	//Menu
	jQuery("header nav ul li a[href^='#']").on('click', function(e) {

		// prevent default anchor click behavior
		e.preventDefault();

		// store hash
		var hash = this.hash;

		// animate
		jQuery('html, body').animate({
			scrollTop: jQuery(hash).offset().top
		}, 300, function(){

			// when done, add hash to url
			// (default click behaviour)
			window.location.hash = hash;
		});

	});
	
	//Home Carrossel
	var carouselHeight = function(){ return jQuery(window).height() - jQuery('header').height()}
	function resizeCarrossel()
	{
		jQuery('#carousel-generic').height(carouselHeight());
		jQuery('#carousel-generic .item').height(carouselHeight());
		
		var carouselSizeProportion = jQuery(window).width() / carouselHeight();
		jQuery('#carousel-generic .item > img').each(function(){
			jQuery(this).css('marginTop', 0);
			
			var imageSizeProportion = jQuery(this).attr('width') / jQuery(this).attr('height');
			if(carouselSizeProportion < imageSizeProportion) {
				var imgNewWidth = jQuery(window).width();
				var imgNewHeight = jQuery(window).width()/imageSizeProportion;
				
				jQuery(this).width(imgNewWidth);
				jQuery(this).height(imgNewHeight);
				jQuery(this).css('marginTop',  ( carouselHeight()-imgNewHeight ) / 2 );
			}
			else
			{
				var imgNewWidth = carouselHeight() * imageSizeProportion;
				var imgNewHeight = carouselHeight();
				
				jQuery(this).width(imgNewWidth);
				jQuery(this).height(imgNewHeight);
			}
		});
		jQuery('#carousel-generic .item .img-bg img').each(function(){
			jQuery(this).height(carouselHeight()*2);
			jQuery(this).width(jQuery(window).width()*2);
		});
	}
	resizeCarrossel();
	jQuery(window).resize(resizeCarrossel);
	
	//Agenda
	jQuery('[data-toggle="tooltip"]').tooltip();
	
	jQuery('.content-agenda .more-itens a').click(function(){
		jQuery('.content-agenda .hidden').removeClass('hidden');
		jQuery(this).hide();
	});
});