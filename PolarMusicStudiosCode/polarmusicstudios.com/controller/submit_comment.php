<?php
include 'connect.php'; 

$name = $_POST['name'];
$comment = $_POST['comment'];
date_default_timezone_set('America/Los_Angeles');
$time = date('Y-m-d H:i:s', time());
$good_comment = 1;

if(strpos($name, "<a>") === false || strpos($name, "<html>") === false || strpos($name, "<button>") === false || strpos($name, "href") === false) {
	$good_comment = 0;
	echo "this";
}

if(strpos($comment, "<a>") === false || strpos($comment, "<html>") === false || strpos($comment, "<button>") === false || strpos($comment, "href") === false) {
	$good_comment = 0;
}


if(strlen($name) > 0 && strlen($comment) > 0 && $good_comment == 1) {
	$query = "INSERT INTO vibrant_comments (name, comment, time) VALUES ('$name', '$comment', '$time')";
	//echo $query;
	mysqli_query($conn, $query);

}

header( 'Location: http://www.polarmusicstudios.com/' ) ;

?>
