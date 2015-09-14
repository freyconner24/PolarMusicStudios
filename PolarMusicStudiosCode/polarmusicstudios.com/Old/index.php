<!DOCTYPE html>
<html>
<head>
	<title>Polar MusiStudios</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

<?php include 'header.php'; ?>
<?php //include 'banner.php'; ?>
<!--*****************************Content*********************************-->
<div class="jumbotron text-center">
	<!--<h1 class="goth">Polar Music Studios</h1> -->
	<img src="pictures/GuitarSmall.png" class="img-responsive" alt="Responsive image" style="display: block; margin-right: auto; margin-left: auto; margin-top: -20px;">
	<hr>
	<p class="" style="font-family: josefin sans; font-weight: 400; font-size: 25px;">It's all about recording music.</p>
	<a href="about.php" class="btn btn-danger" style="margin-bottom: -20px;">What is Polar Music Studios?</a>
</div>

<!-- ************************************** Column Info **************************************-->
<div class="container">
	<div class="row">
		
		
		<div class="col-md-6"> <!-- can use 'sm' 'md' 'lg'--> <!-- Bootstrap has 12 spaces horizantal -->
			<div class="padding-home marg">
				<a href="ep.php" style="color: #222; text-decoration: none;">
				<h3 class="text-center my-h3"><span class="brackets">{</span><span class="my-head"> For Want Of A Letter EP </span><span class="brackets">}</span></h3>
				<hr>
				<p>This is currently my most precious recording project because it is my first full on music production. Listen and enjoy.</p>
				<img src="pictures/photo/PMS-1.jpg" class="img-responsive img-marg-top" alt="Responsive image">
				<!--<a href="#" class="btn btn-info">Read</a> -->
				</a>
			</div>
		</div>
		<div class="col-md-6"> <!-- can use 'sm' 'md' 'lg'--> <!-- Bootstrap has 12 spaces horizantal -->
			<div class="padding-home marg">
				<a href="music.php" style="color: #222; text-decoration: none;">
				<h3 class="text-center my-h3"><span class="brackets">{</span><span class="my-head"> Music </span><span class="brackets">}</span></h3>
				<hr>
				<p>I believe that music is the root of all things wonderful.  Take an inside look at my recording practices and writing process.</p>
				<img src="pictures/photo/PMS-16.jpg" class="img-responsive img-marg-top" alt="Responsive image">
				<!--<a href="#" class="btn btn-info">Read</a> -->
				</a>
			</div>
		</div>
		<!--<div class="col-md-6">
			<div class="padding-home marg">
				<a href="blog.php" style="color: #222; text-decoration: none;">
				<h3 class="text-center my-h3"><span class="brackets">{</span><span class="my-head"> Blog: My Life As Is </span><span class="brackets">}</span></h3>
				<hr>
				<p>I am very passionate about my work and I enjoy sharing work flows.  Well, here it is: a day in the life.</p>
				<img src="pictures/photo/PMS-10.jpg" class="img-responsive img-marg-top" alt="Responsive image">
				</a>
			</div>
		</div>-->
	</div>

	<div class="row">
		

		<div class="col-md-6"> <!-- can use 'sm' 'md' 'lg'--> <!-- Bootstrap has 12 spaces horizantal -->
			<div class="padding-home marg">
				<a href="photo.php" style="color: #222; text-decoration: none;">
				<h3 class="text-center my-h3"><span class="brackets">{</span><span class="my-head"> Photography </span><span class="brackets">}</span></h3>
				<hr>
				<p>Check out my most recent photography endeavors.  This page includes candid shots of friends all the way up to staged photo shoots.</p>
				<img src="pictures/photo/PMS-20.jpg" class="img-responsive img-marg-top" alt="Responsive image">
				<!--<a href="#" class="btn btn-info">View</a> -->
				</a>
			</div>
		</div>

		<div class="col-md-6"> <!-- can use 'sm' 'md' 'lg'--> <!-- Bootstrap has 12 spaces horizantal -->
			<div class="padding-home marg">
				<a href="video.php" style="color: #222; text-decoration: none;">
				<h3 class="text-center my-h3"><span class="brackets">{</span><span href="video.php" class="my-head"> Videography </span><span class="brackets">}</span></h3>
				<hr>
				<p>After running the YouTube channel at UC Davis for a while, I got really into video.  This section will feature music videos and short films.</p>
				<img src="pictures/photo/PMS-23.jpg" class="img-responsive img-marg-top" alt="Responsive image">
				<!--<a href="#" class="btn btn-info">Watch</a> -->
				</a>
			</div>
		</div>
	</div>
</div>

<br>
<br>
<br>

<!--***************************** Content *********************************-->

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
