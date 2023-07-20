(function( $ ) {
	'use strict';

	
	$(document).ready(function() {
		$("#viderlab-checkin").change(function() {
			update_search_url();
		});
	
		$("#viderlab-checkout").change(function() {
			update_search_url();
		});

		$("#viderlab-adults").change(function() {
			update_search_url();
		});

		$("#viderlab-children").change(function() {
			update_search_url();
		});
	});
	
	function update_search_url() {
		var url = $('#viderlab-todoalojamiento-form').attr('action');
		var checkin = $('#viderlab-checkin').val();
		var checkout = $('#viderlab-checkout').val();
		var adults = $('#viderlab-adults').val();
		var children = $('#viderlab-children').val();
	
		url = url.split('#')[0]; // Eliminar cualquier fragmento existente en la URL
		//url = url.split('?')[0]; // Eliminar cualquier parámetro existente en la URL
	
		url += '&fechaDesde=' + encodeURIComponent(checkin) + '&fechaHasta=' + encodeURIComponent(checkout) + '&adultos=' + encodeURIComponent(adults) + '&ninios=' + encodeURIComponent(children);
	
		$('#viderlab-todoalojamiento-form').attr('action', url);
	}

})( jQuery );
