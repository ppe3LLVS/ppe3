function autocompletion() {
	var min_length = 1;
	var numero = $('#cavalier').val();
	if (numero.length >= min_length) {
		$.ajax({
			url: 'ajout-obtention_ajax-refresh.php',
			type: 'POST',
			data: {numero:numero},
			success: function(data) {
				$('#liste_cavaliers').show();
				$('#liste_cavaliers').html(data);
			}
		});
	} else {
		$('#liste_cavaliers').hide();
	}
}

function set_item(item1, item2, item3) {
	$('#cavalier').val(item1);
	$('#nom').val(item2);
	$('#prenom').val(item3);
	$('#liste_cavaliers').hide();
}