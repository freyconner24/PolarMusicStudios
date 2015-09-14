function collapseTitles() {
	var vidShown = false;
	$("#videography-title").on("click", function() {
		if(!vidShown) {
			$("#videography").show(1000);
			vidShown = true;
		} //if
		else {
 			$("#videography").hide(1000);
 			vidShown = false;
		} //else
	});

	var audioShown = false;
	$("#audio-title").on("click", function() {
		if(!audioShown) {
			$("#audio").show(1000);
			audioShown = true;
		} //if
		else {
 			$("#audio").hide(1000);
 			audioShown = false;
		} //else
	});

	var photoShown = false;
	$("#photo-title").on("click", function() {
		if(!photoShown) {
			$("#photo").show(1000);
			photoShown = true;
		} //if
		else {
 			$("#photo").hide(1000);
 			photoShown = false;
		} //else
	});

	var webShown = false;
	$("#web-dev-title").on("click", function() {
		if(!webShown) {
			$("#web-dev").show(1000);
			webShown = true;
		} //if
		else {
 			$("#web-dev").hide(1000);
 			webShown = false;
		} //else
	});

	var hireShown = false;
	$("#hire-title").on("click", function() {
		if(!hireShown) {
			$("#hire").show(1000);
			hireShown = true;
		} //if
		else {
 			$("#hire").hide(1000);
 			hireShown = false;
		} //else
	});
} //collapseTitles()