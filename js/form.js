$(document).ready(function(){

	// submit lead form
	$(':submit').click(function(e){
		$('.text').each(function(){
			// console.log('this is an error');
			if($('.text').val().length == 0){
				$(this).addClass('errorBg');
				return false;
			}else{
				// console.log('valid');
				return true;
			}
		});
		e.preventDefault();
	});

	$('.text').focus(function(){
		$(this).removeClass('errorBg');
	});


	// hide and show lead form
	$('.btn_check_avail').click(function () {
		$(".lead-form").show('fast');
	});

	$('.close').click(function () {
		$(".lead-form").hide('fast');
	});

	
});