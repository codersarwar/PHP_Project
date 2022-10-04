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
        
        if(isset($_GET['id'])){
            $a=$_GET['id'];
            
        
        
        $query = mysqli_query($found,"SELECT * FROM `wallet_management` where `id`=$a");
        
            while($read=mysqli_fetch_array($query)){
                
            
        $id = $read['id'];
       $name = $read['userid'];
    $credit = $read['credit'];
    $address = $read['transaction_number'];
    $city = $read['credit_date'];
    
                  }
        }
        ?>


<?php 
        if(isset($_POST['submit'])){
            
        $userid = $_POST['userid'];
    $credit = $_POST['credit'];
    $transaction_number = $_POST['transaction_number'];
    $credit_date = $_POST['credit_date'];
   
if(mysqli_query($found,"UPDATE `wallet_management` SET `userid` = '$userid',`credit` = '$credit',`transaction_number`='$transaction_number',`credit_date`='$credit_date' WHERE id= $id"));
                echo "data updated";
          
            header('location:walet_management.php');
            
        }
            else{
                echo "data not field";
            
        }
        
        
        ?>
        


<div class="row">
<div class="col-md-12 d-flex">

<div class="card card-table flex-fill">
<div class="card-header">
<h4 class="card-title float-start">Update Catagory</h4>
<div class="table-search float-end">


</div>
</div>
<div class="card-body p-3">
<div class="table-responsive no-radius">

     
        <form action="" method="post">
            
            <input type="number" class="form-control mt-1 mb-1" name="userid" placeholder="Enter userid" value="<?php echo $userid;?>">
            <input type="text" class="form-control mt-1 mb-1" name="credit" placeholder="Enter credit" value="<?php echo $credit;?>">
             <input type="number" class="form-control mt-1 mb-1" name="amount" placeholder="Enter amount" value="<?php echo $transaction_number;?>">
             <input type="number" class="form-control mt-1 mb-1" name="transaction_number" placeholder="Enter transaction_number" value="<?php echo $credit_date;?>">
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