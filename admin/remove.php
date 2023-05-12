<?php
$id = $_GET["id"];
$conn = mysqli_connect("localhost","root","","iphone");
	mysqli_query($conn, "SET NAMES 'utf8'");

	$str2 = "delete from products where id = '$id'";
	mysqli_query($conn, $str2);
	header("location: list-products.php");
	
mysqli_close($conn);

?>