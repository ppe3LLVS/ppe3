// autocompletion
function autocomplet_ro() {
	var min_length = 1; // nombre de caractère avant lancement recherch 
	var keyword = $('#robe_id').val();  // nom_id fait référence au champ de recherche puis lancement de la recherche grace ajax_refresh
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh_ro.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#nom_list_idro').show();
				$('#nom_list_idro').html(data);
			}
		});
	} else {
		$('#nom_list_idro').hide();
	}
}

// Lors du choix dans la liste
function set_item4(item, item2) {
	// change input value
	$('#robe_id').val(item);
	$('#robe_id2').val(item2);
	// hide proposition list
	$('#nom_list_idro').hide();
}