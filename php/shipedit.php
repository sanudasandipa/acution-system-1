<?php 

    require_once("ship.php"); 
    $shippingdetail_id=$_GET['GetID'];
    $query = " select * from `shipping_details` where shippingdetail_id='".$shippingdetail_id."'";
    $result=mysqli_query($con,$query);
	

    while($row=mysqli_fetch_assoc($result))
    {
        $shippingdetail_id = $row['shippingdetail_id'];
        $shippingAddress = $row['shippingAddress'];
        $zipCode = $row['zipCode'];
        $shippingMethod = $row['shippingMethod'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
	<link rel="stylesheet" href="styles\page1.css"> 
	<link rel="stylesheet" href="styles\Ship To.css">
  
    <title>Document</title>
</head>


   <body>

<h2>Update page</h2>


<center>

</center>
<br>
<br/>
<center >
<  <div class="ship-form">
  <form action="update.php" method="POST">
  <h2 class="htitle">Shipping Details</h2>
     <label for="shippingAddress" class="subtitle">Shipping Address: </label>
	 <input type="text" class="address"  placeholder="Enter your shipping address" name="shippingAddress" value="<?php echo $shippingAddress?>" required>
	 <br>
	 <br>
	 <label for="zipCode" class="subtitle">Zip Code: </label>
	 <input type="number" class="card-2" name="zipCode" placeholder="Enter Zip Code" value="<?php echo $zipCode?>" required>
	 <br>
	 <br>
	 <label for="shippingMethod" class="subtitle">Shipping method: </label>
	 <select name="shippingMethod">
	    <option value="select shipping method" >select shipping method </option>
		<option value="Standardshipping" <?php if($shippingMethod == "Standardshipping") echo "selected"; ?>>Standard shipping</option>
		<option value="Expeditedshipping"<?php if($shippingMethod == "Expeditedshipping") echo "selected"; ?>>Expedited shipping</option>
		<option value="Internationalshipping" <?php if($shippingMethod == "Internationalshipping") echo "selected"; ?>>International shipping</option>
	</select>
	<br>
	<br>
	   <button type="submit" class="sub-bttn">Update</button>
	   
  </form>
</center>


<center>

</center>
    
</body>
</html>