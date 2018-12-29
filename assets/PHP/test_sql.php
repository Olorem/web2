<?php

	
	if($_GET['blank'])
	{
		echo "<br/> I get value of blank: ";
		echo $_GET['blank'];
	}	
	if($_GET['qsearch'])
	{
		echo "<br/> I get value of qsearch: ";
		echo $_GET['qsearch'];
	}	
	if(isset($_GET['go']))
	{
		$url = "https://www.google.ru/search?q={$_GET['qsearch']}";
		echo "<br/> I get value of go: ";
		echo isset($_GET['go']);
		header("Location: {$url}");
	}	
	if(isset($_GET['add']))
	{
		$handle = fopen("../DB_csv/staff.csv", "a+");
		$string = $_GET['blank'];
		//fwrite($handle, $string);
		$pieces = explode(", ", $string);
		fputcsv($handle, $pieces, ",");
		header("location: http://localhost/web2/index.php");
		fclose($handle);
	}

	/*$link = mysqli_connect('localhost', "root", '', 'web2_listofproduct'); 
	echo mysqli_connect_error($link);
	$sql = mysql_query("SELECT * FROM product");
	$result = mysqli_query("SELECT * FROM `product` ");
	if (  !$link  )  die("Error");
   	$arr = array(
   		0 => 1,
		1 => 123124,
		"foo" => "bar",
		"foo",
	);
	var_dump($arr["foo"]);
   	var_dump($result);
   	var_dump($sql);
    var_dump($arr);*/
?>