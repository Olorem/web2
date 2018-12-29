<?php
	$handle = fopen("assets/DB_csv/staff.csv", "r");
    if($handle == false)
    {
    	printf("Error: Couldn't open file\n");
    	exit(1);
    }

    while($row = fgetcsv($handle))
    {
    	$name = $row[0];
    	$cost = $row[1];
    	$rating = $row[2];
    	$category = $row[3];
    	$weight = $row[4];
    	$color = $row[5];
    	$country = $row[6];
    	$image = $row[7];
    	$result = "<img class=\"product_image\" src=\"{$image}\"/>";
    	//printf($result);
		?>
		<div class="block_first">
			<div class="cross">&nbsp;</div>
			<div class="block_image">
				<?= $result ?>
			</div>

			<div class="block_hood">	
				<div class="description">
							Description: <br>
							<?=$name?>
				</div>
				<div class="description_1">
						<ul>
							<li>Cost:</li>
							<li>Rating:</li>
							<li>Category:</li>
							<li>Weight:</li>
							<li>Color:</li>
							<li>Country:</li>
						</ul>
				</div>
				<div class="description_2">
					<ul>
						<li> <?=$cost?> </li>
						<li> <?=$rating?></li>
						<li><?=$category?></li>
						<li><?=$weight?></li>
						<li><?=$color?></li>
						<li><?=$country?></li>
					</ul>
				</div>

				<div class="but">
						<a href="testpage.html" accesskey="s">  Add to card  </a>
				</div>
			</div>
			
		</div>
<?php } 
	fclose($handle);
?>