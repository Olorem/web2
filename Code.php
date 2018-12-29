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
	<canvas id="firstCanvas" />
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
		context.fillText('Linear Gradient', 60, 160);
	</script>
	<canvas id="chess" width="400" height="400" />
	<script type="text/javascript">
		var chess = document.getElementById('chess');
		var ctx = chess.getContext('2d');
		ctx.stroke(0, 0, 400, 400);
	</script>


</body>
</html>