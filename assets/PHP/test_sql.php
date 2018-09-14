<?php
	echo "<br/> I get value: ";
	if($_GET['blank'])
	{
		echo $_GET['blank'];
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