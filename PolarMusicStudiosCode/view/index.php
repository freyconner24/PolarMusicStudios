<!DOCTYPE html>
<html>
<head>
	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "../controller/include_css.php"; ?>
	
	<link rel="stylesheet" type="text/css" href="../static/css/home.css">
	
	<style type="text/css">
		html {padding: 0; margin: 0;}
		body {padding: 0; margin: 0;}
		.row {padding: 0; margin: 0;}
		.col-sm-6 {padding: 0;} .col-sm-5 {padding: 0;} .col-sm-7 {padding: 0;} .col-sm-3 {padding: 0;} .col-sm-4 {padding: 0;}
	</style>

</head>
<body>

<?php include '../controller/header.php'; ?>

<!-- <div id="mission-statement" class="row">
	<div class="text text-center">THIS IS MY MISSION</div>
</div> -->

<div id="kyle-logo" class="row">
	<a href=""><div id="kyle-cont" class="col-sm-7">
		<div id="kyle"></div>
		<div class="pacifico text text-vert text-center">Watch Kyle's Video</div>
	</div></a>
	<div id="logo" class="col-sm-5 cream-b">
		<img class="img-responsive center-block text-vert" src="../static/images/polar-logo.png" alt="Responsive image">
		<div class="text montserrat-bold text-center center-block"><a href="https://www.youtube.com/channel/UC1vJTvUDmBuOp82kBUtf6-Q">YOUTUBE CHANNEL</a></div>
	</div>
</div>

<div id="tri-pics" class="row montserrat text-center crimson-b white">
	<div class="col-sm-4">
		<img id="video-icon" class="icon img-responsive center-block" src="../static/images/camera.png" alt="Responsive image">
		<div class="text">VIDEO</div>
		<div class="desc">At Polar Music Studios, visual aesthetics are extremly important.  We work hard to capture the artist's persona and the client's vision </div>
	</div>
	<div class="col-sm-4">
		<img id="audio-icon" class="icon img-responsive center-block" src="../static/images/mic.png" alt="Responsive image">
		<div class="text">AUDIO</div>
		<div class="desc">We have a saying: "Audio comes first". Although Polar Music Studios has entered various other veins of multi-media, we will never forget our humble beginnings</div>
	</div>
	<div class="col-sm-4">
		<img id="community-icon" class="icon img-responsive center-block" src="../static/images/community.png" alt="Responsive image">
		<div class="text">COMMUNITY</div>
		<div class="desc">We try to curate a community of caring, talented, driven musicians who help each other out by sharing content and promoting each other's music</div>
	</div>
</div>

<div id="quality-shani" class="row">
	<div id="quality" class="col-sm-5 gray-7-b">
		<img class="img-responsive center-block text-vert" src="../static/images/quality.png" alt="Responsive image">
	</div>
	<a href=""><div id="shani-cont" class="col-sm-7">
		<div id="shani"></div>
		<div><div class="pacifico text text-vert text-center">Watch Shani's Video</div></div>
	</div></a>
</div>

<div id="social" class="row pacifico text-center cream-b white">
	<div class="col-sm-3 social-border">
		<a href="https://www.youtube.com/user/PolarMusicStudios"><img id="youtube-icon" class="icon img-responsive center-block" src="../static/images/youtube-icon.png" alt="Responsive image"></a>
		<div class="text">youtube</div>
	</div>
	<div class="col-sm-3 social-border">
		<a href="https://www.facebook.com/polarmusicstudios"><img id="facebook-icon" class="icon img-responsive center-block" src="../static/images/facebook-icon.png" alt="Responsive image"></a>
		<div class="text">facebook</div>
	</div>
	<div class="col-sm-3 social-border">
		<a href="http://instagram.com/polarmusicstudios/"><img id="instagram-icon" class="icon img-responsive center-block" src="../static/images/instagram-icon.png" alt="Responsive image"></a>
		<div class="text">instagram</div>
	</div>
	<div class="col-sm-3">
		<a href="https://twitter.com/PolarMuse"><img id="twitter-icon" class="icon img-responsive center-block" src="../static/images/twitter-icon.png" alt="Responsive image"></a>
		<div class="text">twitter</div>
	</div>
</div>

<div id="make-music" class="row montserrat-bold">
	<div class="text text-center">LET'S MAKE SOME MUSIC.</div>
</div>

<?php include "../controller/contact.php"; ?>

<?php include "../controller/include_js.php"; ?>
<script type="text/javascript" src="../static/js/home.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		collapseMenu();
		contactPolygon();
		homeResize();
	});
</script>

</body>
</html>







