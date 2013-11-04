$(document).ready(function() {
	var summitDate = new Date(); 
	summitDate = new Date(2014, 4, 20); 
	$('#defaultCountdown').countdown({until: summitDate});
});