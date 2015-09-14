function collapseMenu() {
	var menuVisible = false;
	$("#collapse-button").click(function() {
		if(!menuVisible) {
			menuVisible = true;
			$("#collapse-menu").show(1000);
		} //if
		else {
			menuVisible = false;
			$("#collapse-menu").hide(1000);
		} //else

		$(window).resize(function() {
			if($(window).width() > 768) {
				menuVisible = false;
				$("#collapse-menu").hide(1000);
			} //if 	
		});
		
	});
} //collapseMenu()

function contactPolygon() {
	$("#polar").mouseover(function() {
		$("#my-polygon").css("fill", "#a8222f");	
	});
	$("#polar").mouseout(function() {
		$("#my-polygon").css("fill", "#7d0d19");	
	});

	//-----------------------------

	$(".contact").click(function() {
		$("#black").fadeIn(800);
		$("body").css("overflow", "hidden");
	});
	$("#close-btn").click(function() {
		$("#black").fadeOut(800);
		$("body").css("overflow", "auto");
	});
}