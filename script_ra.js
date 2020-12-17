// autocompletion
function autocomplet_ra() {
	var min_length = 1; // nombre de caractère avant lancement recherch 
	var keyword = $('#race_id').val();  // nom_id fait référence au champ de recherche puis lancement de la recherche grace ajax_refresh
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh_ra.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#nom_list_idra').show();
				$('#nom_list_idra').html(data);
			}
		});
	} else {
		$('#nom_list_idra').hide();
	}
}

// Lors du choix dans la liste
function set_item5(item,item2) {
	// change input value
	$('#race_id').val(item);
	$('#race_id2').val(item2);
	// hide proposition list
	$('#nom_list_idra').hide();
}