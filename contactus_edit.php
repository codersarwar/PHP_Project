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
            
        
        
        $query = mysqli_query($found,"SELECT * FROM `contactus` where `id`=$a");
        
            while($read=mysqli_fetch_array($query)){
                
            
        $id = $read['id'];
        $company_name = $read['company_name'];
    $address = $read['address'];
    $whatsapp = $read['whatsapp'];
    $phone_one = $read['phone_one'];
    $phone_two = $read['phone_two'];
    $mail = $read['mail'];
   
                  }
        }
        ?>


<?php 
        if(isset($_POST['submit'])){

        $company_name = $_POST['company_name'];
    $address = $_POST['address'];
    $whatsapp = $_POST['whatsapp'];
    $phone_one = $_POST['phone_one'];
    $phone_two = $_POST['phone_two'];
    $mail = $_POST['mail'];
   
            
if(mysqli_query($found,"UPDATE `contactus` SET `company_name` = '$company_name',`address` = '$address',`whatsapp`='$whatsapp',`phone_one`='$phone_one',`phone_two`='$phone_two',`mail`='$mail' WHERE id= $id"));
                echo "data updated";
          
            header('location:contactus.php');
            
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
            
            <input type="text" class="form-control mt-1 mb-1" name="company_name" placeholder="Enter company_name" value="<?php echo $company_name;?>">
            <input type="text" class="form-control mt-1 mb-1" name="address" placeholder="Enter address" value="<?php echo $address;?>">
             <input type="number" class="form-control mt-1 mb-1" name="whatsapp" placeholder="Enter whatsapp" value="<?php echo $whatsapp;?>">
             <input type="number" class="form-control mt-1 mb-1" name="phone_one" placeholder="Enter phone_one" value="<?php echo $phone_one;?>">
             <input type="number" class="form-control mt-1 mb-1" name="phone_two" placeholder="Enter phone_two" value="<?php echo $phone_two;?>">
             <input type="email" class="form-control mt-1 mb-1" name="mail" placeholder="Enter mail" value="<?php echo $mail;?>">
            
             
            
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