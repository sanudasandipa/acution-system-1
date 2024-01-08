<?php

$Paymentmethod=$_POST['Paymentmethod'];
$cardName=$_POST['cardName'];
$Cardnumber=$_POST['Cardnumber'];
$expiry=$_POST['expiry'];


//Database connection
$conn=new mysqli('localhost','root','','auctionmaster');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt= $conn->prepare("insert into paymentmethod_details(Paymentmethod,cardName,Cardnumber,expiry)
	    values(?,?,?,?)");

    $stmt->bind_param("ssis",$Paymentmethod,$cardName,$Cardnumber,$expiry);
	$stmt->execute();
	echo "registration successfully....";
	$stmt->close();
	$conn->close();
}

?>
