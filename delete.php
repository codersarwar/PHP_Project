<?php
require_once 'config/connection_inc.php';?>
?>


<?php
if(isset($_GET['catagory_id'])){
    $x=$_GET['catagory_id'];
    mysqli_query($found,"delete from `product_catagory` where `catagory_id`=$x");
    header('location:catagory.php');
}

?>