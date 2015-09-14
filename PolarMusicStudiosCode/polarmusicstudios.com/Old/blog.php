<!DOCTYPE html>
<html>
<head>
	<title>Polar: Blog</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>

<?php include 'header.php'; ?>
<?php //include 'banner.php'; ?>
<?php include 'functions/blogPics.php'; ?>
<!--***************************** Header *********************************-->
<div style="opacity: .6; position: fixed; width: 100%; height: 30px; background-color: #EEE; top: 0px; z-index: 1;">
	<div class="text-center" style="font-weight: 500; font-size: 20px; margin-top: 3px; font-family: josefin sans;">BLOG</div>
</div>

<!--***************************** Content *********************************-->
<div class="container center-block">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="page-header">
						<h3 class="my-h3">Polar Music Studios Blog</h3>
						<hr>
						<p class="my-quote"><i style="font-size: 18px;">"This is literally just a day in the life.  I have many interests and I hope to portray them here.  Happy reading!" &nbsp;&#8212;CF</i></p>
						<hr>

						<?php
							include 'posts/blog3.php';
							include 'posts/blog2.php';
							include 'posts/blog1.php';
						?>
	
					</div>
					<div class="pull-right" style="color: #aaa; font-weight: 200;"><i>Page last edited on July 22, 2014</i></div>
				</div>
			</div>
		</div>
	</div>
</div>

<br>
<br>
<br>

<!--***************************** Footer *********************************-->

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

</body>
</html>
