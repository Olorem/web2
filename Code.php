<!DOCTYPE html>
<html>
<head>
	<title>Code Form</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<!-- <link rel="php" type="text/php" href="index.php"> -->
	<link rel="stylesheet" href="assets/CSS/Style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Cinzel|Comfortaa|Concert+One|Lobster|M+PLUS+Rounded+1c:700|Patua+One|Raleway|Righteous|Roboto:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/CSS/snake.css">
	<script src="assets/JS/snake.js"></script>
	<script src="assets/Js/calcBeg.js"></script>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
</head>
<body>

	<script type="text/javascript">
		function computeAnswer() {
			var input = document.getElementById('fst').value;
			var scd = document.getElementById('scd');
			scd.value = input;
		}

	</script>
	<?php include_once 'assets/PHP/header.php' ?>
	<div class="formAct">
		<form>
			<textarea id="fst"></textarea>
			<textarea id="scd"></textarea>
			<a id="" href=# onclick="computeAnswer()">Enter</a>
		</form>
	</div>
	<br>
	<hr color='gray'>
	<div class="calc" margin="20px"> <input> 
		<a onclick="calcBeg(1)">1</a><a onclick="calcBeg(2)">2</a><a onclick="calcBeg(3)">3</a>
		<a onclick="calcBeg(4)">4</a><a onclick="calcBeg(5)">5</a><a onclick="calcBeg(6)">6</a>
		<a onclick="calcBeg(7)">7</a><a onclick="calcBeg(8)">8</a><a onclick="calcBeg(9)">9</a>
		<a onclick="calcBeg('C')">C</a><a onclick="calcBeg(0)">0</a><a onclick="calcBeg('=')">=</a>
	</div>
	<hr color="gray">
	<div id="matrix"></div> <div id="slider"></div>
	<hr color="gray">
	<canvas id="firstCanvas"></canvas>
	<script type="text/javascript">
		// Canvas
		var canvas = document.getElementById('firstCanvas');
		canvas.width = 400;
		canvas.height = 300;
		var context = canvas.getContext('2d');
		// Gradient
		var grad = context.createLinearGradient(0, 0, 400, 300);
		grad.addColorStop(0, 'orange');
		grad.addColorStop(1, 'purple');
		context.fillStyle = grad;
		context.fillRect(0, 0, 400, 300);
		// Path
		context.beginPath();
		context.moveTo(0, 0);
		context.lineTo(400, 300);
		context.stroke();
		// Circle
		context.beginPath();
		context.arc(200, 150, 150, 0, 2 * Math.PI);
		context.stroke();
		// Text
		context.fillStyle = '#ffffff';
		context.font = "40px Arial";
		context.fillText('Linear Gradient', 62, 160);
	</script>
	<!-- <hr color="gray">
	<canvas id="chess" width="400" height="400" ></canvas>
	<script type="text/javascript">
		var chess = document.getElementById('chess');
		var ctx = chess.getContext('2d');
		//ctx.stroke(0, 0, 400, 400);
	</script> -->

	<hr color="gray">

	<div class="circleDiv"><div class="Circle"></div></div> <!-- Circle like on Cananio -->
	<script type="text/javascript"> 
		var circle = document.getElementsByClassName('Circle')[0];
		var intervalVal = 1;
		var interval = setInterval(function(){ 
			circle.style.border = intervalVal ? "5px solid #ffaaaa" : "2px solid #ffaaaa";
			circle.style.left = intervalVal ? "2px" : "5px";
			circle.style.top = intervalVal ? "2px" : "5px";
				intervalVal = (intervalVal + 1) % 2;
			}, 1200);
	</script>
	<br><br><hr color="gray">
	<br><br><hr color="gray"><!-- Google Maps API -->
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	<div id="map"></div>
	<script type="text/javascript">
		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: { lat:-35, ing: 150},
				zoom: 8
			});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
    async defer></script>
	<br><br><hr color="gray">

</body>
</html>


Content-type: text/xml

<?xml version="1.0" encoding="utf-8"?>
<testing-report run-id="19417" judge-id="5" status="RU" scoring="KIROV" run-tests="0" contest-id="229" compile-error="yes" tests-passed="0" score="0" max-score="0" >
  <uuid>a6e2254f-c29f-49ee-8adc-9977cfebef2a</uuid>
  <compiler_output></compiler_output>
</testing-report>