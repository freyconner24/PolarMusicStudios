<?php  //header( 'Location: http://www.polarmusicstudios.com/view/' ) ;  ?>

<!DOCTYPE html>
<html>
<head>
<?php include 'controller/connect.php'; ?>
	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "controller/include_css.php"; ?>
	
	<link rel="stylesheet" type="text/css" href="static/css/home.css">
	
	<style type="text/css">
		html {padding: 0; margin: 0;}
		body {padding: 0; margin: 0;}
		.row {padding: 0; margin: 0;}
		.col-sm-6 {padding: 0;} .col-sm-5 {padding: 0;} .col-sm-7 {padding: 0;} .col-sm-3 {padding: 0;} .col-sm-4 {padding: 0;}
		
		.title {position: absolute; width: 100%; height: 100px;}
		.title .polar-title {
			font-size: 3.0em;
			padding: 20px 0;
			position: absolute;
			left: 50%;
		}

		.title .background {
			position: absolute;
			background-color: #222;
			opacity: 0.6;
			height: 100px;
			width: 100%;
		}

		img {
			padding: 0 6%;
			padding-bottom: 6%;
		}

		.shadow {
			box-shadow: 0px 0px 10px #666;
		}

		.vibrant {
			height: 100px;
			width: 100px;
			background-image: url(static/images/VibrantDreams.jpg);
			background-size: 100%;
			background-position: center;
		}

		.vibrant {
			transition-property: background-position;
			transition-duration: 300s;
			transition-timing-function: linear;
		}
		.vibrant:hover {
			background-position: -100000px;
		}

		#timer-holder {margin-left: 5px; font-size: 1em;}
	</style>
</head>
<body>
<div class="shadow">
<div class="title text-center center-block">
	<div class="background"></div>
	<div class="pacifico text-center center-block white polar-title">Polar Music Studios<!-- &nbsp;&mdash;<span id="timer-holder" class="montserrat-bold"></span>--></div>	
</div>

</div>
<!-- <img src="static/images/VibrantDreams.jpg" class="img-responsive" alt="Responsive image"> -->
<a href="http://www.polarmusicstudios.com/view/"><div class="vibrant"></div></a>

<?php include "controller/contact.php"; ?>

<?php include "controller/include_js.php"; ?>
<script type="text/javascript" src="static/js/home.js"></script>
<script type="text/javascript" src="countdown.js"></script>

<script type="text/javascript">
	function updateTime() {

		var d = new Date(); // for now
		var h = d.getHours(); // => 9
		var m = d.getMinutes(); // =>  30
		var s = d.getSeconds(); // => 51

		m -= 60;
		m *= -1;
		s -= 60;
		s *= -1;
		$(".timer .title").text(h + ":" + m + ":" + s);

		var targetDate = new Date(2050, 00, 01); // Jan 1, 2050;
 		clock.innerHTML = countdown(targetDate).toString();
	}

	function updateTimeText(dateString) {
  		dateString = dateString.replace("hours", "");
	    dateString = dateString.replace("hour", "");
	    dateString = dateString.replace("seconds", "");
	    dateString = dateString.replace("second", "");
	    dateString = dateString.replace("minutes", "");
	    dateString = dateString.replace("minute", "");
	    dateString = dateString.replace("and", "");
	    dateString = dateString.replace(" , ", ":");
	    dateString = dateString.replace(" , ", ":");
	    dateString = dateString.replace(" ", "");
	    dateString = dateString.replace(" ", "");
	    dateString = dateString.replace(" ", "");
	    dateString = dateString.replace(" ", "");
	    var str = dateString.split("day,");
	    if(str.length == 2) {
	    	var str2 = str[1].split(":");
		    str2[0] = parseInt(str2[0]) + parseInt(str[0]) * 24;
		    dateString = str2[0] + ":" + str2[1] + ":" + str2[2];	
	    }
	    str = dateString.split(":");

	    if(str.length == 3) {
		    var i = 0;
		    for(i = 0; i < 3; ++i) {
		    	if(str[i] == "undefined") {
		    		str[i] = "00";
		    		dateString = dateString.replace(" ", "");
		    		dateString = str[0] + ":" + str[1] + ":" + str[2];
		    	} //if
		    } //if
		} //if

		else if(str.length == 2) {
		    var i = 0;
		    for(i = 0; i < 2; ++i) {
		    	if(str[i] == "undefined") {
		    		str[i] = "00";
		    		dateString = dateString.replace(" ", "");
		    		dateString = "00:" + str[0] + ":" + str[1];
		    	} //if
		    } //if
		} //if

		else if(str.length == 1) {
		    var i = 0;
		    for(i = 0; i < 1; ++i) {
		    	if(str[i] == "undefined") {
		    		str[i] = "00";
		    		dateString = dateString.replace(" ", "");
		    		dateString = "00:00:" + str[0];
		    	} //if
		    } //if
		} //if

		return dateString;
  	}

	$(document).ready(function() {
		var width = $(window).width();
		var height = $(window).height();

		if(width < height) {
			width = height;
		} //if

		$(".vibrant").css("width", width + "px");
		$(".vibrant").css("height", height + "px");

		$(".title .polar-title").css("margin-left", (-1 * $(".title .polar-title").width()) / 2);

		$(".timer").css("margin-top", (-1 * $(".timer").height()) / 2);
		$(".timer").css("margin-left", (-1 * $(".timer").width()) / 2);

		//setInterval(updateTime, 1000);
	});
</script>

<script>
  	var clock = document.getElementById("timer-holder")
    , targetDate = new Date(2015, 00, 23); // Jan 1, 2050;
 
 		var dateString = countdown(targetDate).toString();
	    dateString = updateTimeText(dateString);
	    clock.innerHTML = dateString;
  	
  	setInterval(function(){
	    var dateString = countdown(targetDate).toString();
	    dateString = updateTimeText(dateString);
	    clock.innerHTML = dateString;
  	}, 1000);


</script>
</body>
</html>