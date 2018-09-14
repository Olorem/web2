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


		<div class="block_header">
			<a href="#" class="link_head">Home</a>
			<a href="#" class="link_head">Branch</a>
			<a href="#" class="link_head">Content</a>
			<a href="#" class="link_head" id="about">About</a></div>


		
		
		<!-- <script defer src="assets/JS/Script.js"></script> -->
















		<center>
				<div class="block_marquee">
					<marquee scrollamount="15"> <b>My e-mail:   d23l12@mail.ru  &emsp;&emsp;&emsp;  Мой телефон: 89612544155  &emsp;&emsp;&emsp;  My QIWI wallet: +7961254155 &emsp;&emsp;&emsp;</b> </marquee>
				</div></center>






			<div class="first"> 
				<form name="search" action="assets/PHP/test_sql.php" method="get">
					<input type="text" placeholder="Search" name="qsearch"/>
					<button type="submit">Go</button>
					<input formaction="assets/PHP/test_sql.php" type="text" placeholder="Adding a new product" name="blank"/>
					<button type="submit">Add</button>
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
				This text is lorem ipsum copy. Its my improvisation. Never mind. Lorem ipsum dolor sit amet
			</div>

		</div>


		<div class="wrapper">
			<?php
				include_once'assets/PHP/phpManager.php';
			?>
		</div>
		

















		<div class="block_footer">

			This page made by <a href="https://www.google.ru/search?newwindow=1&authuser=0&source=hp&ei=lWmAW7WNB4ysswGxxJaYCg&q=rearto&oq=rearto&gs_l=psy-ab.3..0i10i19k1j0i19k1l2j0i10i30i19k1l2j0i30i19k1l2j0i10i30i19k1j0i30i19k1j0i10i30i19k1.3074.8399.0.9903.8.7.0.0.0.0.167.658.3j3.7.0....0...1.1.64.psy-ab..1.7.740.6..0j35i39k1j0i131k1.86.e4MATvtuXwo">Rearto</a> <sup>&copy;</sup></div>
			<?php echo date('l, F jS, Y'); ?>
			
	</div>
</body>
	
</html>