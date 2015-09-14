<!DOCTYPE html>
<html>
<head>
	<title>Ajax Test</title>
</head>
<body>
<form role="form" type="GET">
	<input type="submit" value="Like" id="like-btn">
	<div id="hi">Hello</div>
</form>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!--Order matters!  jQuery must go before bootstrap-->
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">
/*
$( "#like-btn" ).click(function() {
  $("#like-btn").val("Liked");
  window.alert("Hello");
});
*/

$(document).ready(function () {
	$.ajax({

	    url : 'dosomething.php',
	    type : 'GET',
	    data : {
	        'numberOfWords' : 10
	    },
	    dataType:'json',
	    success : function(data) {              
	        alert('Data: '+data);
	        $.("#like-btn").val("Liked");
	    },
	    error : function(request,error)
	    {
	        alert("Request: "+JSON.stringify(request));
	    }
	});
});
</script>
</body>
</html>
