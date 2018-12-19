$(function() {
	$('.toggle').click(function() {
		$('.layout').toggleClass('ativo');
		$('.menu-responsivo').toggleClass('ativo');
	});

	new WOW().init();
});