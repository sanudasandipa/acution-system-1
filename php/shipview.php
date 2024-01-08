<?php 

   
    $con=mysqli_connect('localhost','root','','auctionmaster'); 
    if(!$con) { die('Connection Error'); } 

    $query = ' select * from `shipping_details` ';
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Shipping Details</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }
</head>
<body >

<table>
    <tr>
        <td> shippingdetail_id </td>
        <td> shippingAddress </td>
        <td> zipCode</td>
        <td> shippingMethod </td>
        
    </tr>

<?php 
                                    
     while($row=mysqli_fetch_assoc($result))
        {
            $shippingdetail_id = $row['shippingdetail_id'];
            $shippingAddress = $row['shippingAddress'];
            $zipCode = $row['zipCode'];
            $shippingMethod = $row['shippingMethod'];
            
?>
    <tr>
        <td><?php echo $shippingdetail_id ?></td>
            <td><?php echo $shippingAddress ?></td>
            <td><?php echo $zipCode ?></td>
            <td><?php echo $shippingMethod ?></td>
            
            <td><a href="shipedit.php?GetID=<?php echo $shippingdetail_id ?>">Edit</a></td>
            <td><a href="shipdelete.php?Del=<?php echo $shippingdetail_id ?>">Delete</a></td>
    </tr>        
<?php 
                                    }  
 ?>                                                                    
                                   

              </table>
 
    
</body>
</html>