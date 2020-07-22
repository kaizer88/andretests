$( "#id_no" ).change(function() {
	var id = $('#id_no').val();
	var id_trim = id.substr(0, 6).match(/.{1,2}/g);
	var get_dob = id_trim[0]+"-"+id_trim[1]+"-"+id_trim[2];
	var newDate = new Date(get_dob);
	var newDob = id_trim[2] + "-" + id_trim[1] + "-" + newDate.getFullYear();

	$('#dob').val($('#dob').val());
	
	$('#dob').val(newDob);

});