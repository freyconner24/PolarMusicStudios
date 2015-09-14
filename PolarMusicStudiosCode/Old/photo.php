<!DOCTYPE html>
<html>
<head>
	<title>Polar: Photo</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="gallery/css/bootstrap-image-gallery.css">
	<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

</head>
<body>

<!-- **************************** Navigation Bar ********************************** -->
<?php include 'header.php'; ?>
<?php //include 'banner.php'; ?>

<!-- ******************************* Header ************************************* -->
<div style="opacity: .6; position: fixed; width: 100%; height: 30px; background-color: #EEE; top: 0px; z-index: 1;">
	<div class="text-center" style="font-weight: 500; font-size: 20px; margin-top: 3px; font-family: josefin sans;">PHOTOGRAPHY</div>
</div>

<!-- ******************************* Content ************************************* -->
<div class="container center-block">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="page-header">
						<h3 class="my-h3">A Bunch Of My Favorite Photos &nbsp<small class="my-small-h3">&#8212 July 20th, 2014</small></h3>
						<hr>
						<p class="my-quote"><i style="font-size: 18px;">"This page is where I will post my favorite pictures from outings with my friends to semi-professional studio photography.  I also plan to feature some of my friends' photos on this page as well! This place will simply be a gallery for happy viewing." &nbsp;&#8212;CF</i></p>
                        <hr>

			<?php include 'functions/printPictures.php'; ?>


					</div>
				</div>
<div class="pull-right" style="color: #aaa; font-weight: 200;"><i>Page last edited on July 14, 2014</i></div>
			</div>
		</div>
	</div>
</div>


<!-- ******************************** Blue Imp************************ -->
<div id="blueimp-gallery" class="blueimp-gallery" >
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <!--<i class="glyphicon glyphicon-chevron-left"></i>-->
                        < Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next >
                        <!--<i class="glyphicon glyphicon-chevron-right"></i>-->
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<!--*****************************Footer*********************************-->

<?php include 'footer.php'; ?>
<!--***************************** Modal Box *********************************-->
<div class="modal fade" id="contact" role="dialog"> <!-- The ID 'contact' is used for the data-toggle='modal' above -->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Cool Info Bro</h4>
			</div>
			<div class="modal-body">
				<p>Hey what's up!  My website is really good!</p>
			</div>
			<div class="modal-footer">
				<a class="btn btn-info" href="#">Accept</a>
				<a class="btn btn-danger" data-dismiss="modal" href="#">Close</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!--Order matters!  jQuery must go before bootstrap-->
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="gallery/js/bootstrap-image-gallery.js"></script>

</body>
</html>

