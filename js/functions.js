jQuery(function () {
	//Agenda
	jQuery('[data-toggle="tooltip"]').tooltip();
	
	jQuery('.content-agenda .more-itens a').click(function(){
		jQuery('.content-agenda .hidden').removeClass('hidden');
		jQuery(this).hide();
	});
});