$(document).ready(function(){
	$(':submit').click(function(e){
		$('.text').each(function(){
			// console.log('this is an error');
			if($('.text').val().length == 0){
				$('.text').addClass('errorBg');
				return false;
			}else{
				console.log('valid');
				return true;
			}
		});
		e.preventDefault();
	});
	$('.text').focus(function(){
		$(this).removeClass('errorBg');
	})
});