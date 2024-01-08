<?php
   $con=mysqli_connect("localhost","root","","auctionmaster"); 
    if(!$con) { die(" Connection Error "); } 
if(isset($_GET['Del']))
         {
             $shippingdetail_id = $_GET['Del'];
             $query = " delete from `shipping_details` where id = '".$shippingdetail_id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:shipview.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:shipview.php");
         }
         
 ?> 