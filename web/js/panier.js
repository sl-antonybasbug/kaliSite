var panier = {
		
};

jQuery(document).ready(function($) {
	$('.acheter').on('click', function() {
		var $reference = $(this).parent().find('.reference').val();
		$.ajax({
			url: "../panier/add",
			type: "POST",
			data: {ref : $reference},
			dataType: "json"
		}).done(function(data) {
			if (data.ajax === 'ok') {
				
			}
		});
		return false;
	});
});