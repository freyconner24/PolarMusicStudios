function resizeVideosBoxs() {
	if($( window ).width() > 767) {
		var height = $(".box").width();
		height -= 50;
		$(".box").css("height", height + "px");
		$(".video").css("height", height + "px");	
	} //if
	else {
		var height = $(".video").width();
		height *= 0.65;
		$(".video").css("height", height + "px");
	} //else

	$(".video iframe").css("height", height + "px");
	$(".video .vid-img").css("height", height + "px");
	height += 30;
	$(".video").css("background-size", "auto " + height + "px");

	$( window ).resize(function() {
		if($( window ).width() > 767) {
			var height = $(".box").width();
			height -= 50;
			$(".box").css("height", height + "px");
			$(".video").css("height", height + "px");
		} //if
		else {
			var height = $(".video").width();
			height *= 0.65;
			$(".video").css("height", height + "px");
		} //else

		$(".video iframe").css("height", height + "px");
		$(".video .vid-img").css("height", height + "px");
		height += 30;
		$(".video").css("background-size", "auto " + height + "px");
	});



	//-------------------------------------------



}
