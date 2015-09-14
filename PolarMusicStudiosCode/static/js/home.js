
function homeResize() {
	var height = $("#logo").width();
	height -= 50;
	$("#logo").css("height", height + "px");
	$("#kyle").css("height", height + "px");
	height += 30;
	$("#kyle").css("background-size", "auto " + height + "px");

	$( window ).resize(function() {
		var height = $("#logo").width();
		height -= 50;
		$("#logo").css("height", height + "px");
		$("#kyle").css("height", height + "px");
		height += 30;
		$("#kyle").css("background-size", "auto " + height + "px");
	});

	//-------------------------------

	var height = $("#quality").width();
	height -= 50;
	$("#quality").css("height", height + "px");
	$("#shani").css("height", height + "px");
	height += 30;
	$("#shani").css("background-size", "auto " + height + "px");

	$( window ).resize(function() {
		var height = $("#quality").width();
		height -= 50;
		$("#quality").css("height", height + "px");
		$("#shani").css("height", height + "px");
		height += 30;
		$("#shani").css("background-size", "auto " + height + "px");
	});
}