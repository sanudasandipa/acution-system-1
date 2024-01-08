<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
$fullName=$_POST['fullName'];
$city=$_POST['city'];
$address=$_POST['address'];
$country=$_POST['country'];
$zipCode=$_POST['zipCode'];
$phoneNumber=$_POST['phoneNumber'];

//Database connection
$conn=new mysqli('localhost','root','','auctionmaster');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt= $conn->prepare("insert into registration(username,email,password,confirmPassword,fullName,city,address,country,zipCode,phoneNumber)
	    values(?,?,?,?,?,?,?,?,?,?)");

    $stmt->bind_param("ssssssssii",$username,$email,$password,$confirmPassword,$fullName,$city,$address,$country,$zipCode,$phoneNumber);
	$stmt->execute();
	echo "registration successfully....";
	$stmt->close();
	$conn->close();
}

?>
