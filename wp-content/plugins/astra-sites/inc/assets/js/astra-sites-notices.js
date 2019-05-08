jQuery(document).ready(function ($) {

	jQuery( '.astra-notice.is-dismissible .notice-dismiss' ).on( 'click', function() {
		var $id = jQuery( this ).attr( 'id' ) || '';
		var $time = jQuery( this ).attr( 'dismissible-time' ) || '';
		var $meta = jQuery( this ).attr( 'dismissible-meta' ) || '';

		jQuery.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action 	: 'astra-notices',
				id 		: $id,
				meta 	: $meta,
				time 	: $time,
			},
		});

	});

});