<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title> Command Testing </title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="php" type="text/php" href="index.php">
	<link rel="stylesheet" href="assets/CSS/Style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Cinzel|Comfortaa|Concert+One|Lobster|M+PLUS+Rounded+1c:700|Patua+One|Raleway|Righteous|Roboto:700" rel="stylesheet">
</head>



<body bgcolor="303030">
	<div class="body">


		<?php include_once 'assets/PHP/header.php'?>


		
		
		  





		<center>
				<div class="block_marquee">
					<marquee scrollamount="15"> <b>My e-mail:   d23l12@mail.ru  &emsp;&emsp;&emsp;  Мой телефон: 89612544155  &emsp;&emsp;&emsp;  My QIWI wallet: +7961254155 &emsp;&emsp;&emsp;</b> </marquee>
				</div></center>

			<div class="first"> 
				<form name="search" action="assets/PHP/test_sql.php" method="get">
					<input type="text" placeholder="Search" name="qsearch"/>
					<button class="form" name="go">Go</button>
					<input formaction="assets/PHP/test_sql.php" type="text" placeholder="Adding a new product (name, cost, rating, category, weight, color, country, image link)" name="blank"/>
					<button class="form" name="add">Add</button>
				</form>
			</div>


			<!-- <div class="video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/HglrIajAsrc" frameborder="0"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>-->


		<div class="sidebar">
			<ul>
				<li>Our team</li>
				<li>Gigabites</li>
				<li>For steps</li>
				<li>Filter</li>
				<li>FAQ</li>
			</ul>
		</div>


		<div class="advertisement">
			<img src="img/logo.jpg"/>
			<div class="text">
				This text is lorem ipsum copy. Some text for comment(water) Lorem ipsum dolor sit amet.
			</div>

		</div>


		<div class="wrapper">
			<?php
				include_once'assets/PHP/phpManager.php';
			?>
		</div>
		






		<div class="block_footer" style="color: black">

			This page made by <a href="https://www.google.ru/search?q=Olorem">Olorem</a> <sup>&copy;</sup></div>
			




			<script defer src="assets/JS/Script.js"></script>  
			
	</div>
</body>
	
</html>