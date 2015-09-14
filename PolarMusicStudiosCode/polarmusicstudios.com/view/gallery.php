<!DOCTYPE html>
<html>
<head>
	<title>Polar Music Studios</title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>

	<?php include '../controller/include_css.php'; ?>

	<link rel='stylesheet' type='text/css' href='../static/css/gallery.css'>
		
	<link rel='stylesheet' href='../static/css/bootstrap-image-gallery.css'>
	<link rel='stylesheet' href='http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css'>

	<style type='text/css'>
		html {padding: 0; margin: 0;}
		body {padding: 0; margin: 0;}
		.row {padding: 0; margin: 0;}
		.col-sm-6 {padding: 0;} .col-sm-5 {padding: 0;} .col-sm-7 {padding: 0;} .col-sm-3 {padding: 0;} .col-sm-4 {padding: 0;}
	</style>

</head>
<body>

<?php include '../controller/header.php'; ?>

<div id='gallery-cont'>
<?php  
$count = 1;
for($i = 0; $i < 8; ++$i) {
	$pic_url_1 = "PMS-". $count++;
	$pic_url_2 = "PMS-". $count++;
	$pic_url_3 = "PMS-". $count++;
	$pic_url_4 = "PMS-". $count++;

	echo "<div class='row'>
			<a href='../static/images/gallery/$pic_url_1.jpg' data-gallery><div class='col-sm-3 col-xs-6 pic pic-1' style='background-image: url(../static/images/gallery/$pic_url_1.jpg);'></div></a>
			<a href='../static/images/gallery/$pic_url_2.jpg' data-gallery><div class='col-sm-3 col-xs-6 pic pic-2' style='background-image: url(../static/images/gallery/$pic_url_2.jpg);'></div></a>
			<a href='../static/images/gallery/$pic_url_3.jpg' data-gallery><div class='col-sm-3 col-xs-6 pic pic-3' style='background-image: url(../static/images/gallery/$pic_url_3.jpg);'></div></a>
			<a href='../static/images/gallery/$pic_url_4.jpg' data-gallery><div class='col-sm-3 col-xs-6 pic pic-4' style='background-image: url(../static/images/gallery/$pic_url_4.jpg);'></div></a>
		</div>";	
}
?>
</div>

<div id='looking' class='montserrat bottom-block white gray-4-b'>
	<div class='block-text text-center'>
		LOOKING GOOD.
	</div>
</div>

<!--  -->

<div id='blueimp-gallery' class='blueimp-gallery' >
    <!-- The container for the modal slides -->
    <div class='slides'></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class='title'></h3>
    <a class='prev'>‹</a>
    <a class='next'>›</a>
    <a class='close'>×</a>
    <a class='play-pause'></a>
    <ol class='indicator'></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-body next'></div>
                <div class='modal-footer'>
                    <button type='button' class=' pull-left prev my-button crimson-b montserrat white'>
                        <!--<i class='glyphicon glyphicon-chevron-left'></i>-->
                        PREVIOUS
                    </button>
                    <button type='button' class=' next my-button crimson-b montserrat white'>
                        NEXT
                        <!--<i class='glyphicon glyphicon-chevron-right'></i>-->
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../controller/contact.php'; ?>

<?php include '../controller/include_js.php'; ?>
<script type='text/javascript' src='../static/js/gallery.js'></script>

<script src='http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js'></script>
<script src='../static/js/bootstrap-image-gallery.js'></script>

<script type='text/javascript'>
	$(document).ready(function() {
		collapseMenu();
		contactPolygon();
		picResize();
	});
</script>

</body>
</html>







