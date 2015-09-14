<!DOCTYPE html>
<html>
<head>
	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "../controller/include_css.php"; ?>
	
	<link rel="stylesheet" type="text/css" href="../static/css/page.css">
	<link rel="stylesheet" type="text/css" href="../static/css/about.css">
</head>
<body>

<div class="white-b">
<?php include '../controller/header.php'; ?>
</div>
<!-- <div id="mission-statement" class="row">
	<div class="text text-center">THIS IS MY MISSION</div>
</div> -->

<div id="info" class="center-block montserrat-bold "> 
	<div class="row pics-row">
		<div class="col-xs-6 pics">
			<div id="pic-1" class="pic"></div>
		</div>
		<div class="col-xs-6">
			<div id="pic-2" class="pic" style="margin-bottom: 2px;"></div>
		</div>
	</div>
	<div class="row" style="margin-bottom: 2px;">
		<div class="title gray-4-b white" style="margin-bottom: 2px;">WHO IS POLAR MUSIC STUDIOS GUY?</div>
		<div class="sub-title crimson tan">ABOUT ME</div>
		<div class="text gray-7 tan">
			<p>
			For those of you who have not met me yet, I'm <span class="gray-4">Conner Frey</span>!  I'll be honest, I'm kind of a weird dude.  I have a wide range of interests and hobbies that don't necessarily relate to eachother... For starters, I'm a Computer Science major at USC and I am minoring in Web Technologies and Applications.  However, I am extremely passionate about music, videography, the written word, and reading.  I would rather ride fixed than walk or drive and I listen to rap and post hardcore more than anything other genres &mdash; even though I mainly record indie music.  I tend to overly use smiley faces and the super carne asada burrito at Santa Fe Taqueria in San Jose is my favorite food group.
			<br>
			<br>
			So that's me!  I'm looking forward to meeting you (:
			</p>
		</div>
	</div>
	<div id="meet-you" class="row pacifico bottom-block crimson-b">
		<div class="block-text text-center white">Nice to meet you!</div>
	</div>
</div>

<?php include "../controller/contact.php"; ?>

<?php include "../controller/include_js.php"; ?>
<script type="text/javascript" src="../static/js/home.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		collapseMenu();
		contactPolygon();
		homeResize();

		var height = $(".pic").width();
		$(".pic").css("height", height + "px");

		$(window).resize(function() {
			var height = $(".pic").width();
			$(".pic").css("height", height + "px");

		});
	});
</script>

</body>
</html>







