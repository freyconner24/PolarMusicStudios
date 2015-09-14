function noraResize() {
	var height = $("#logo").width();
	height -= 50;
	$("#logo").css("height", height + "px");
	$("#conner").css("height", height + "px");
	height += 30;
	$("#conner").css("background-size", "auto " + height + "px");

	$( window ).resize(function() {
		var height = $("#logo").width();
		height -= 50;
		$("#logo").css("height", height + "px");
		$("#conner").css("height", height + "px");
		height += 30;
		$("#conner").css("background-size", "auto " + height + "px");			
	});
}

function picYouTubeResize() {
	var height = $(".pic-col").width();
	height *= 0.7;
	$("#pics .pic").css("height", height + "px");

	var height = $("#youtube-vid iframe").width();
	height *= 0.56;
	$("#youtube-vid iframe").css("height", height + "px");

	$( window ).resize(function() {
		var height = $(".pic-col").width();
		height *= 0.7;
		$("#pics .pic").css("height", height + "px");

		var height = $("#youtube-vid iframe").width();
		height *= 0.56;
		$("#youtube-vid iframe").css("height", height + "px");			
	});	
}

