<?php
require_once 'config/connection_inc.php';?>
?>


<?php
if(isset($_GET['id'])){
    $x=$_GET['id'];
    mysqli_query($found,"delete from `add_product` where `id`=$x");
    header('location:Add_Product.php');
}

?>