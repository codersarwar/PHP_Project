<?php
ob_start();
include "config/connection_inc.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Dreamchat - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/feathericon.min.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" href="assets/css/style.css">

<script src="https://kit.fontawesome.com/83912781be.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="main-wrapper">

<?php
include "include/topbar.php";
    
    ?>

<?php
include "include/sidebar.php";
    
    ?>

<div class="page-wrapper">
<div class="content container-fluid">

<?php
include "include/card.php";
?>
<?php
        
        if(isset($_GET['id'])){
            $a=$_GET['id'];
            
        
        
        $query = mysqli_query($found,"SELECT * FROM `cupon_code` where `id`=$a");
        
            while($read=mysqli_fetch_array($query)){
                
            
        $id = $read['id'];
        $cupon = $read['cuponcode'];
        $expiry = $read['expirydate'];
              $amount = $read['amount'];   
                  }
        }
        ?>


<?php 
        if(isset($_POST['submit'])){
            //$a = $_GET['catagory_id'];
            $cupon = $_POST['cuponcode'];
            $expiry = $_POST['expirydate'];
            $amount = $_POST['amount'];
            
            
            if(mysqli_query($found,"UPDATE `cupon_code` SET `cuponcode` = '$cupon',`expirydate` = '$expiry',`amount`=$amount WHERE id= $id"));
                echo "data updated";
            header('location:cuponmanagement.php');
        }
            else{
                echo "data not field";
            
        }
        
        
        ?>
        
        












<div class="row">
<div class="col-md-12 d-flex">

<div class="card card-table flex-fill">

<div class="card-body p-3">
<div class="table-responsive no-radius">

            
              <form action="" method="post">
            
            <input type="text" class="form-control mt-1 mb-1" name="cuponcode" placeholder="Enter cuponcode" value="<?php echo $cupon;?>">
            
            <input type="date" class="form-control mt-1 mb-1" name="expirydate" placeholder="Enter expirydate" value="<?php echo $expiry;?>">
            
            <input type="number" class="form-control mt-1 mb-1" name="amount" placeholder="Enter amount" value="<?php echo $amount;?>">
           
          
            
            <input type="submit" name="submit" class="btn btn-success mt-1 mb-1" value="submit">
            
        </form>




</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>