<!DOCTYPE html>
<html>
<head>
	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include "../controller/include_css.php"; ?>
	
	<link rel="stylesheet" type="text/css" href="../static/css/polarVideo.css">
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


<?php
error_reporting(E_ALL);
$feedURL = "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&forUsername=PolarMusicStudios&key=AIzaSyCu22aIvFpmirab3xZwDkibk-h5QIJSqKw";

$fileContents = file_get_contents($feedURL);
$youtubeAccountJson = json_decode($fileContents);

$uploadPlaylistId = $youtubeAccountJson->items[0]->contentDetails->relatedPlaylists->uploads;
$youtubeVidURL = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId=PL5uscYEAt-qd9mcY0kDMCvyWuc4i6DbeO&key=AIzaSyCu22aIvFpmirab3xZwDkibk-h5QIJSqKw";

$fileContents = file_get_contents($youtubeVidURL);
$youtubeVidJson = json_decode($fileContents);

foreach ($youtubeVidJson->items as $item) {
    $videoId = (string)$item->snippet->resourceId->videoId;

    $title = $item->snippet->title;
    $title = explode("Chasing Nora || ", $title);
    $title = $title[1];
?>

<?php if($i % 4 == 0) { ?>
    <div class="row video-row">
		<div class="col-sm-7 video-cont-L">
			<div class="video">
				<iframe class="center-block" src="https://www.youtube.com/embed/<?php echo $videoId;?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-sm-5 light-blue-b box-R box">
			<div class="text blue pacifico center-block text-center text-vert"><?php echo $title; ?></div>
		</div>
	</div>

<?php } else if($i % 4 == 1) { ?>
	<div class="row video-row">
		<div class="col-sm-5 blue-b box-L box">
			<div class="text white pacifico center-block text-center text-vert"><?php echo $title; ?></div>
		</div>
		<div class="col-sm-7 video-cont-R">
			<div class="video">
				<iframe class="center-block" src="https://www.youtube.com/embed/<?php echo $videoId;?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

<?php } else if($i % 4 == 2) { ?>
	<div class="row video-row">
		<div class="col-sm-7 video-cont-L">
			<div class="video">
				<iframe class="center-block" src="https://www.youtube.com/embed/<?php echo $videoId;?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-sm-5 gray-7-b box-R box">
			<div class="text white pacifico center-block text-center text-vert"><?php echo $title; ?></div>
		</div>
	</div>

<?php } else if($i % 4 == 3) { ?>
	<div class="row video-row">
		<div class="col-sm-5 box-L box" style="background-color: #ddd;">
			<div class="text pacifico center-block text-center text-vert"><?php echo $title; ?></div>
		</div>
		<div class="col-sm-7 video-cont-R">
			<div class="video">
				<iframe class="center-block" src="https://www.youtube.com/embed/<?php echo $videoId;?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<?php }	
	$i++;
}
?>

<div class="row bottom-block montserrat-bold dark-blue-b">
	<div class="block-text text-center white">THANKS FOR WATCHING!</div>
</div>

<?php include "../controller/contact.php"; ?>

<?php include "../controller/include_js.php"; ?>
<script type="text/javascript" src="../static/js/video.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		collapseMenu();
		contactPolygon();
		resizeVideosBoxs();
	});
</script>

</body>
</html>







