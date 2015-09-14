function picResize() {
	var height = $(".pic").width();
	$(".pic").css("height", height + "px");

	$( window ).resize(function() {
		var height = $(".pic").width();
		$(".pic").css("height", height + "px");
	});	
}