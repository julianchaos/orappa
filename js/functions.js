jQuery(function () {
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