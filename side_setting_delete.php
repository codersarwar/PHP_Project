<?php
require_once 'config/connection_inc.php';?>
?>


<?php
if(isset($_GET['id'])){
    $x=$_GET['id'];
    mysqli_query($found,"delete from `site_setting` where `id`=$x");
    header('location:side_setting.php');
}

?>