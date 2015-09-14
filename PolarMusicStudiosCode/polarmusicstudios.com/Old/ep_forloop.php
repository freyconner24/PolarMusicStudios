<!DOCTYPE html>
<html>
<head>
	<title>Polar: EP</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- ******************************* Navigation Bar ************************************* -->

<?php include 'header.php';
	include 'functions/test.php';
	//include  'printAccordian.php';
?>

<!--***************************** Header *********************************-->
<div style="opacity: .6; position: fixed; width: 100%; height: 30px; background-color: #EEE; top: 0px; z-index: 1;">
	<div class="text-center" style="font-weight: 500; font-size: 20px; margin-top: 3px; font-family: josefin sans;">FOR WANT OF A LETTER EP</div>
</div>

<!--***************************** Content *********************************-->
<div class="container center-block">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="page-header">
						<h3 class="my-h3">Take A Listen &nbsp<small class="my-small-h3">&#8212 July 4th, 2014</small></h3>
						<!--<div class="row">
							<div class="col-sm-6">
								<img src="pictures/PMS-1.jpg" class="img-responsive" alt="Responsive image" style="">
							</div>
							<div class="col-sm-6">
								<img src="pictures/PMS-5.jpg" class="img-responsive" alt="Responsive image">
							</div>
						</div> -->
						<hr>
						<p class="my-quote" style="padding: 0 80px 0 80px;"><i style="font-size: 18px;">"As I said before, <i>For Want Of A Letter</i> is literally my most precious project.  I had no idea that self-producing my own EP would be so rewarding, exciting, and heart wrenching all at the same time.  Although the release date is still undetermined, it will come out early August.  Happy listening!" &nbsp;&#8212;CF</i></p>

						<hr>

						<h4 class="my-h4 my-title">Lyrics</h4>



						<?php
							hello();
							//printAccordian_fun();
						?>



					</div>
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
