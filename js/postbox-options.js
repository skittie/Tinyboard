$('.post-table-options').css('display', 'none');
window.optionsShowing = false;
$(document).on('click', '.show-post-table-options', function(e) {
	if (!window.optionsShowing) { 
		$('.show-post-table-options').html('[&#9660; '+_('Piilota lisäasetukset')+']'); 
		$('.post-table-options').css('display', 'table');
		window.optionsShowing = true;
	} else { 
		$('.show-post-table-options').html('[&#9654; '+_('Näytä lisäasetukset')+']'); 
		$('.post-table-options').css('display', 'none');
		window.optionsShowing = false;
	}; 

	return false;
});

