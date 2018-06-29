$(function(){

	$('.tabitem').on('click', function(){
		$('.activetab').removeClass('activetab');
		$(this).addClass('activetab');
	})
});