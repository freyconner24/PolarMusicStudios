<!DOCTYPE html>
<html>
<head>
	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "../controller/include_css.php"; ?>

	<link rel="stylesheet" type="text/css" href="../static/css/noraHeader.css">
	<link rel="stylesheet" type="text/css" href="../static/css/noraMusic.css">
</head>
<body>
<?php include '../controller/nora_header.php' ?>

<!-- <div id="mission-statement" class="row">
	<div class="text text-center">THIS IS MY MISSION</div>
</div>
 -->

<div class="row" style="margin-bottom: 2px;" >
	<img src="../static/images/chasingnora-grandfather-1.jpg" class="img-responsive" alt="Responsive image">
</div>

<?php
 
$clientid = "d1cd0dffff7b850364ca58d4e88d32a1"; // Your API Client ID
$userid = "105467023"; // ID of the user you are fetching the information for
 
$soundcloud_url = "http://api.soundcloud.com/users/{$userid}/tracks.json?client_id={$clientid}";
 
$tracks_json = file_get_contents($soundcloud_url);
$tracks = json_decode($tracks_json);
 
 $i = 0;
foreach ($tracks as $track) {

    $track_id = explode("/", $track->stream_url);
    if($i % 2 == 0)
    	$color = "light-blue-b";
	else
	    $color = "blue-b";
    echo "
    <div class='{$color}' style='margin-bottom: 2px; padding: 10px;' >
    	<iframe width='100%' height='166' scrolling='no' frameborder='no' src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{$track_id[4]}&amp;color=3e5467&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false'></iframe>
	</div>
    ";
    $i++;
}
 
?>

<div id="always-chasing" class="row pacifico dark-blue-b bottom-block">
	<div class="block-text text-center white">We are all chasing something.</div>
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
