$(document).ready(function(){

  $('#select_box').change(function(){
		var select = $(this).find(':selected').val();
		$(".hide").hide();
		$('#' + select).show();
	}).change();

});
