$(document).ready(function(){
  $('.Page1').click(function(){
    $('#datetime').animate({'opacity' : '0','height' : '100vh'}, 400,
	function(){
		$('.Page2').fadeIn(500,function(){
		$('.Page1').hide();
		});});
  });
  $("form").submit(function(e){
		e.preventDefault();
		$('.Page2').hide();
		$('.welcome').show();
  });
});
function onLogin(){
	$('.onLogin').show();
	$('.login').hide();
	$('.userEmail').hide();
	$('.passwordInput').focus();
}