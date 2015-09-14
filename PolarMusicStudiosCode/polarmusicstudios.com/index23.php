<!DOCTYPE html>
<html>
<head>
<?php include 'controller/connect.php'; ?>
<?php include 'controller/time_ago.php'; ?>

	<title>Polar Music Studios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "controller/include_css.php"; ?>
	
	<link rel="stylesheet" type="text/css" href="static/css/home.css">
	<link rel="stylesheet" type="text/css" href="static/css/page.css">
	
	<style type="text/css">
		html {padding: 0; margin: 0;}
		body {padding: 0; margin: 0;}
		.row {padding: 0; margin: 0;}
		.col-sm-6 {padding: 0;} .col-sm-5 {padding: 0;} .col-sm-7 {padding: 0;} .col-sm-3 {padding: 0;} .col-sm-4 {padding: 0;}

		.light-yellow {color: #fff3c5;}
		.pinkish {color: #da8993}	
		.purp-dark {color: #c373ab}	
		.purp-darkest {color: #584387}	
		
		.light-yellow-b {background-color: #fff3c5;}
		.pinkish-b {background-color: #da8993}	
		.purp-dark-b {background-color: #c373ab}
		.purp-darkest-b {background-color: #584387}	

		#info .text {margin-bottom: 2px;}

		#comment-form {
			padding-top: 25px;
			padding-bottom: 22px;
			padding-left: 6%;
			padding-right: 6%;
			margin-bottom:2px;
		}

		.form-control {background-color: #fff3c5;border: 1px solid #dad4b1; width: 400px;}

		body {background-color: #222;}

		#info {box-shadow: 0px 0px 10px black;}
	</style>
</head>
<body>

<?php 

$query = "SELECT name, comment, time FROM vibrant_comments";

$result = mysqli_query($conn, $query);
?>



<div id="info" class="center-block montserrat-bold ">
	<a href="http://www.polarmusicstudios.com/view/"><div id="meet-you" class="row pacifico bottom-block purp-darkest-b" style="margin-bottom: 2px;">
		<div class="vibrant-title block-text text-center white">Vibrant Dreams and a Blank Canvas</div>
	</div></a>

	<div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 2px;">
		<iframe class="embed-responsive-item" src="//www.youtube.com/embed/UpvnMXsabTI" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class='sub-title white purp-darkest-b' style="margin-bottom: -28px;">TELL ME YOUR THOUGHTS!</div>
	<form id="comment-form" action="controller/submit_comment.php" method="POST" class="purp-darkest-b">
		<div class="form-group">
			<label class="white">NAME</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label class="white" >COMMENT</label>
			<textarea class="form-control" rows="3" name="comment"></textarea>
			
		</div>
		<input type="submit" class="btn btn-default" value="SUBMIT">
	</form>

	<div class="row">
<?php
	$i = 0;
	while($row = mysqli_fetch_array($result)) {
		$name = strtoupper($row['name']);
		$ago = $row['time'];

		if($i % 2 == 0) {
			echo "<div class='sub-title purp-darkest pinkish-b'>".$name."</div>";
			echo "<div class='text white pinkish-b' style='margin-bottom:2px;'>";
			echo 	"<p>";
			echo 	$row['comment'];
			echo 	"</p>";
			//echo 	"<p>".$ago."</p>" 
			echo "</div>";
		} //if
		else {
			echo "<div class='sub-title purp-darkest purp-dark-b'>".$name."</div>";
			echo "<div class='text white purp-dark-b' style='margin-bottom:2px;'>";
			echo 	"<p>";
			echo 	$row['comment'];
			echo 	"</p>";
			//echo 	"<p>".$ago."</p>";
			echo "</div>";
		} //else

		$i++;
	} //while
?>
	</div>
	<div id="meet-you" class="row pacifico bottom-block purp-darkest-b">
		<div class="block-text text-center white">Thanks for watching!</div>
	</div>
</div>

<?php include "controller/include_js.php"; ?>

<script type="text/javascript">
	$(document).ready(function(){

		$(".vibrant-title").mouseenter(function() {
			$(".vibrant-title").text("CONTINUE TO THE SITE...");
			$(".vibrant-title").addClass("montserrat-bold");
		})
		.mouseleave(function() {
			$(".vibrant-title").text("Vibrant Dreams and a Blank Canvas");
			$(".vibrant-title").removeClass("montserrat-bold");
		});
	});

</script>
















</body>
</html>