$(function(){
$('a').click(function(e){
	e.preventDefault();
	var location = this.id;
	
	/*
	alert(location);
*/

	$('html, body').animate({
		scrollTop :  $('#'+location+"L" ).offset().top - 70
		
		
	},1000);
	
});
	
	
	
});
