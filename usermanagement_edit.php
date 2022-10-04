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
            
        
        
        $query = mysqli_query($found,"SELECT * FROM `user` where `id`=$a");
        
            while($read=mysqli_fetch_array($query)){
                
            
        $id = $read['id'];
       $name = $read['name'];
    $email = $read['email'];
    $address = $read['address'];
    $city = $read['city'];
    $pincode = $read['pincode'];
    $street_name = $read['street_name'];
    $state = $read['state'];
    
                  }
        }
        ?>


<?php 
        if(isset($_POST['submit'])){
            
        $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $street_name = $_POST['street_name'];
    $state = $_POST['state'];
    
if(mysqli_query($found,"UPDATE `user` SET `name` = '$name',`email` = '$email',`address`='$address',`city`='$city',`pincode`='$pincode',`street_name`='$street_name',`state`='$state' WHERE id= $id"));
                echo "data updated";
          
            header('location:usermanagement.php');
            
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
            
    <input type="text" class="form-control mt-1 mb-1" name="name" placeholder="Enter user Name" value="<?php echo $name;?>">
    <input type="email" class="form-control mt-1 mb-1" name="email" placeholder="Enter your email" value="<?php echo $email;?>">
    <input type="text" class="form-control mt-1 mb-1" name="phone" placeholder="Enter your phone" value="<?php echo $phone;?>">
<input type="text" class="form-control mt-1 mb-1" name="address" placeholder="Enter your address" value="<?php echo $address;?>">
<input type="text" class="form-control mt-1 mb-1" name="city" placeholder="Enter your city" value="<?php echo $city;?>">
<input type="number" class="form-control mt-1 mb-1" name="pincode" placeholder="Enter your pincode" value="<?php echo $pincode;?>">
<input type="text" class="form-control mt-1 mb-1" name="street_name" placeholder="Enter your street_name" value="<?php echo $street_name;?>">
<input type="text" class="form-control mt-1 mb-1" name="state" placeholder="Enter your state" value="<?php echo $state;?>">
          
            
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