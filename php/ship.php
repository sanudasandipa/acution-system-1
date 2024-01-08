<?php

$shippingAddress=$_POST['shippingAddress'];
$zipCode=$_POST['zipCode'];
$shippingMethod=$_POST['shippingMethod'];


//Database connection
$conn=new mysqli('localhost','root','','auctionmaster');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt= $conn->prepare("insert into shipping_details(shippingAddress,zipCode,shippingMethod)
	    values(?,?,?)");

    $stmt->bind_param("sis",$shippingAddress,$zipCode,$shippingMethod);
	$stmt->execute();
	echo "shipping detaills submitted successfully....";
	$stmt->close();
	$conn->close();
}

?>
