<!DOCTYPE html>
<html>
<head>
	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include "../controller/include_css.php"; ?>
	
	<link rel="stylesheet" type="text/css" href="../static/css/polarVideo.css">
	<style type="text/css">
		html {padding: 0; margin: 0;}
		body {padding: 0; margin: 0;}
		.row {padding: 0; margin: 0;}
		.col-sm-6 {padding: 0;} .col-sm-5 {padding: 0;} .col-sm-7 {padding: 0;} .col-sm-3 {padding: 0;} .col-sm-4 {padding: 0;}
	</style>

</head>
<body>

<?php include '../controller/header.php' ?>


<?php
error_reporting(E_ALL);
$feedURL = 'http://gdata.youtube.com/feeds/api/users/UC1vJTvUDmBuOp82kBUtf6-Q/uploads?max-results=10';
$sxml = simplexml_load_file($feedURL);
$i=0;
foreach ($sxml->entry as $entry) {
    $media = $entry->children('media', true);
    $watch = (string)$media->group->player->attributes()->url;
    $thumbnail = (string)$media->group->thumbnail[0]->attributes()->url;

    $watch = explode("?v=", $watch);
    $watch = explode("&", $watch[1]);

    $title = explode("By ", $media->group->title);
?>

    <!-- <div class="videoitem">
    	<div class="videothumb"><a href="<?php //echo $watch; ?>" class="watchvideo"><img src="<?php //echo $thumbnail;?>" alt="<?php //echo $media->group->title; ?>" /></a></div>
    	<div class="videotitle">
        	<h3><a href="<?php //echo $watch; ?>" class="watchvideo"><?php //echo $media->group->title; ?></a></h3>
        	<p><?php //echo $media->group->description; ?></p>
        </div>
    </div> -->

<?php if($i % 4 == 0) { ?>
    <div class="row video-row">
		<div class="col-sm-7 video-cont-L">
			<div class="video">
				<iframe class="center-block" src="http://www.youtube.com/embed/<?php echo $watch[0];?>" frameborder="0" allowfullscreen></iframe>
				<!-- <div class="videothumb"><a href="<?php //echo $watch; ?>" class="watchvideo"><div class="vid-img" style="background-image: url(<?php //echo $thumbnail;?>); background-position: center; background-size: 100% auto;"></div></a></div> -->
			</div>
		</div>
		<div class="col-sm-5 crimson-b box-R box">
			<div class="text white pacifico center-block text-center text-vert"><?php echo $title[1]; ?></div>
		</div>
	</div>

<?php } else if($i % 4 == 1) { ?>
	<div class="row video-row">
		<div class="col-sm-5 cream-b box-L box">
			<div class="text crimson pacifico center-block text-center text-vert"><?php echo $title[1]; ?></div>
		</div>
		<div class="col-sm-7 video-cont-R">
			<div class="video">
				<iframe class="center-block" src="http://www.youtube.com/embed/<?php echo $watch[0];?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

<?php } else if($i % 4 == 2) { ?>
	<div class="row video-row">
		<div class="col-sm-7 video-cont-L">
			<div class="video">
				<iframe class="center-block" src="http://www.youtube.com/embed/<?php echo $watch[0];?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-sm-5 gray-7-b box-R box">
			<div class="text white pacifico center-block text-center text-vert"><?php echo $title[1]; ?></div>
		</div>
	</div>

<?php } else if($i % 4 == 3) { ?>
	<div class="row video-row">
		<div class="col-sm-5 box-L box" style="background-color: #ddd;">
			<div class="text pacifico center-block text-center text-vert"><?php echo $title[1]; ?></div>
		</div>
		<div class="col-sm-7 video-cont-R">
			<div class="video">
				<iframe class="center-block" src="http://www.youtube.com/embed/<?php echo $watch[0];?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<?php } ?>
<?php 
	$i++; 
}
?>

<div id="thanks" class="row bottom-block montserrat-bold">
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







