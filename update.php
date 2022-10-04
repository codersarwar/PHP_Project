<?php
session_start();
include "config/connection_inc.php";
if(isset($_GET['id'])){
  $id=$_GET['id']; 
    
    if(mysqli_query($found,"UPDATE `product_catagory` SET  `status` = '2' WHERE catagory_id= $id")){
              $_SESSION["message"]='yes';
            header('location:catagory.php');
        }
            else{
                echo "data not field";
            
        }

}




if(isset($_GET['uid'])){
    
  $uid=$_GET['uid']; 
    
    if(mysqli_query($found,"UPDATE `product_catagory` SET  `status` = '1' WHERE catagory_id= $uid")){
              $_SESSION["message"]='yes';
            header('location:catagory.php');
        }
            else{
                echo "data not field";
            
        }

}
?>