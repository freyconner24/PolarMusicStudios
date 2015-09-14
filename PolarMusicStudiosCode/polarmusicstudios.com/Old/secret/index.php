<!DOCTYPE html>
<html>
<head>
	<title>Christmas: Kelsey</title>
	<link rel="stylesheet" type="text/css" href="kelsey.css">
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,700' rel='stylesheet' type='text/css'>
</head>
<body>
<canvas id="canvas" style="position: absolute;" width="10" height="10"></canvas>
<div style="display: block;">
	<header class="center-block">
		<div class="center-text font">Happy Christmukkah To The Two Best Women In My Life</div>
	</header>
	<div class="cont center-block">
		<div class="inner">
			<div class="title font">
				Mom <small style="font-size: 30px;"> - the best Mom anyone could ask for</small>
			</div>
			<div class="words">
				<p>You are the one who gave birth to me and raised me.  Thanks for everything that you have ever done for me.  I know things are still a little strained, but I truly believe that things are getting better.  This break is a huge step and I wanted to thank you again for making all of the accommodations for Kelsey and I such as putting me in the room that I like and blocking out the time soe that I can play guitar and record and stuff.  It really means a lot to me!  Also, thanks for taking care of me since I have been sick for the past few days (:</p>
				<p>As always I am glad to see that you are spending a lot of time with your friends and going to meetups and stuff.  It's nice to see you out and about and I am sure that it helps keep you happy and upbeat in these crazy times.</p>
				<p class="center-text">Love, Conner</p>

			</div>
			<div class="title2 font">
				Kelsey <small style="font-size: 30px;"> - the largest of the poop clan</small>
			</div>
			<div class="words">
				<p>First off, you are a poophead and I would like to formally induct you into the poop clan which you have so graciously bestowed upon me all those years ago.  It has been quite lonely, seeing that it's so fr a party of one, so now that you are in it we can be an official clan together. Congratulations!  First rounds of initiation will start tonight and you have to please the poop god by eating your own poop and giving me $1000 as tribute for your membership fee. I'll see you tonight on the poop altar (i.e. the toilet) at exactly 12:03am -- otherwise known as "The Pooping Hour".</p>
				<p>In all seriousness though, thanks for being the best sister ever.  You are funny, supportive, talented, downright outrageous, and you always know how to make a situation less awkward.  I don't know how I would have made it through these years without you (:</p>
				<p class="center-text">Love, The Master Of Poop &nbsp;<img id="poop" src="poop.png" style="width: 24px;"></p>

			</div>
			<!-- <img class="tree" src="tree.png"> -->
		</div>
		<div class="btn font center-text center-block">Click Me!</div>
		<br>
		<br>
	</div>
</div>
<audio id="my-audio" src="yoursample.ogg" preload="auto">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">
var sample = document.getElementById("my-audio");
sample.play();	
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".btn").on("click", function() {
			$("#poop").css("position","absolute");
			$("#poop").css("top",0);
			$("#poop").css("left",0);
			$("#poop").animate({
				width: "3000px",
				"margin-left": "-1000px",
				"margin-top": "-1000px"
			}, 4000);
		});
	});
</script>













<!-- SNOW? -->
<script type="text/javascript">
	window.onload = function(){
	//canvas init
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	
	//canvas dimensions
	var W = window.innerWidth;
	var H = window.innerHeight;
	canvas.width = W;
	canvas.height = H;
	
	//snowflake particles
	var mp = 25; //max particles
	var particles = [];
	for(var i = 0; i < mp; i++)
	{
		particles.push({
			x: Math.random()*W, //x-coordinate
			y: Math.random()*H, //y-coordinate
			r: Math.random()*4+1, //radius
			d: Math.random()*mp //density
		})
	}
	
	//Lets draw the flakes
	function draw()
	{
		ctx.clearRect(0, 0, W, H);
		
		ctx.fillStyle = "rgba(255, 255, 255, 0.8)";
		ctx.beginPath();
		for(var i = 0; i < mp; i++)
		{
			var p = particles[i];
			ctx.moveTo(p.x, p.y);
			ctx.arc(p.x, p.y, p.r, 0, Math.PI*2, true);
		}
		ctx.fill();
		update();
	}
	
	//Function to move the snowflakes
	//angle will be an ongoing incremental flag. Sin and Cos functions will be applied to it to create vertical and horizontal movements of the flakes
	var angle = 0;
	function update()
	{
		angle += 0.01;
		for(var i = 0; i < mp; i++)
		{
			var p = particles[i];
			//Updating X and Y coordinates
			//We will add 1 to the cos function to prevent negative values which will lead flakes to move upwards
			//Every particle has its own density which can be used to make the downward movement different for each flake
			//Lets make it more random by adding in the radius
			p.y += Math.cos(angle+p.d) + 1 + p.r/2;
			p.x += Math.sin(angle) * 2;
			
			//Sending flakes back from the top when it exits
			//Lets make it a bit more organic and let flakes enter from the left and right also.
			if(p.x > W+5 || p.x < -5 || p.y > H)
			{
				if(i%3 > 0) //66.67% of the flakes
				{
					particles[i] = {x: Math.random()*W, y: -10, r: p.r, d: p.d};
				}
				else
				{
					//If the flake is exitting from the right
					if(Math.sin(angle) > 0)
					{
						//Enter from the left
						particles[i] = {x: -5, y: Math.random()*H, r: p.r, d: p.d};
					}
					else
					{
						//Enter from the right
						particles[i] = {x: W+5, y: Math.random()*H, r: p.r, d: p.d};
					}
				}
			}
		}
	}
	
	//animation loop
	setInterval(draw, 33);
}
</script>

</body>
</html>