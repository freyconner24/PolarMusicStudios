<!DOCTYPE html>
<html>
<head>
	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "../controller/include_css.php"; ?>

	<link rel="stylesheet" type="text/css" href="../static/css/nora.css">
	<link rel="stylesheet" type="text/css" href="../static/css/noraHeader.css">
	<style type="text/css">
		html {padding: 0; margin: 0;}
		body {padding: 0; margin: 0;}
		.row {padding: 0; margin: 0;}
		.col-sm-6 {padding: 0;} .col-sm-5 {padding: 0;} .col-sm-7 {padding: 0;} .col-sm-3 {padding: 0;} .col-sm-4 {padding: 0;}
	</style>

</head>
<body>

<?php include '../controller/nora_header.php' ?>

<!-- <div id="mission-statement" class="row">
	<div class="text text-center">THIS IS MY MISSION</div>
</div>
 -->
<div id="conner-logo" class="row">
	<a href="https://chasingnora.bandcamp.com/"><div id="conner-cont" class="col-sm-7">
		<div id="conner"></div>
		<div class="text pacifico gray-4 text-vert text-center">Chasing Nora's Stuff</div>
	</div></a>
	<div id="logo" class="col-sm-5 light-blue-b">
		<img class="img-responsive center-block text-vert" src="../static/images/chasing-nora.png" alt="Responsive image">
		<div class="text montserrat text-center center-block"><a href="https://chasingnora.bandcamp.com/">FREE DOWNLOAD</a></div>
	</div>
</div>

<div id="soundcloud" class="row blue-b">
	<div style="border-radius: 10px; padding: 3%;" class="light-blue-b">
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/45046790&amp;color=3e5467&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
	</div>
</div>

<div id="pics" class="row">
	<div class="col-sm-3 col-xs-6 pic-col">
		<div class="pic pic-1"></div>
	</div>
	<div class="col-sm-3 col-xs-6 pic-col">
		<div class="pic pic-2"></div>
	</div>
	<div class="col-sm-3 col-xs-6 pic-col">
		<div class="pic pic-3"></div>
	</div>
	<div class="col-sm-3 col-xs-6 pic-col">
		<div class="pic pic-4" style="margin-right: 0;"></div>
	</div>
</div>

<div id="about" class="row light-blue-b">
	<div class="title montserrat white">ABOUT CHASING NORA</div>
	<div class="text montserrat gray-7">
		I started composing music and writing songs for this project in October of 2013.  Up until that time I had been wanting to start a cohesive musical project for a while, but I knew that I lacked a centralized vision.  After some soul searching and various sonic experiments, I finally decided on the vibes I wanted to give off.  Chasing Nora is the embodiment of my emotions, moral constitution, and deepest fears.
	</div>
</div>

<div id="youtube-vid" class="blue-b">
	<div class="text montserrat white text-center center-block" style="border-bottom: 1px solid white; max-width: 500px;">ALWAYS CHASING</div>
	<div style="border-radius: 10px; padding: 3%; max-width: 960px;" class="light-blue-b center-block">
		<iframe class="center-block" src="https://www.youtube.com/embed/UpvnMXsabTI" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<div id="thanks" class="row pacifico white gray-7-b">
	<img class="text-vert center-block img-responsive" src="../static/images/thanks.png" alt="Responsive image">
</div>

<?php include "../controller/contact.php"; ?>

<?php include "../controller/include_js.php"; ?>
<script type="text/javascript" src="../static/js/nora.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		collapseMenu();
		contactPolygon();
		noraResize();
		picYouTubeResize();
	});
</script>

</body>
</html>







