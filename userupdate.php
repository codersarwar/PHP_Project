<?php
include "config/connection_inc.php";
if(isset($_GET['id'])){
  $id=$_GET['id']; 
    
    if(mysqli_query($found,"UPDATE `user` SET  `status` = '2' WHERE id= $id"));
                echo "data updated";
            header('location:usermanagement.php');
        }
            else{
                echo "data not field";
            
        }



?>