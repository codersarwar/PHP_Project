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
            
        
        
        $query = mysqli_query($found,"SELECT * FROM `add_product` where `id`=$a");
        
            while($read=mysqli_fetch_array($query)){
                
            
        $id = $read['id'];
      $catagory_name=$read["catagory_name"];
        $date=$read["date"];
        $product_name=$read["product_name"];
        $product_description=$read["product_description"];
        $product_price=$read["product_price"];
        $product_section=$read["product_section"];
        $product_varity=$read["product_varity"];
        $product_sticker=$read["product_sticker"];
        $product_quentity=$read["product_quentity"];
        $photo1=$read["photo1"];
        $photo2=$read["photo2"];
        $photo3=$read["photo3"];
        $photo4=$read["photo4"];
        
                  }
        }
        ?>


<?php 
        if(isset($_POST['submit'])){
            //$a = $_GET['catagory_id'];
         $catagory_name=$read["catagory_name"];
        $date=$read["date"];
        $product_name=$_POST["product_name"];
        $product_description=$_POST["product_description"];
        $product_price=$_POST["product_price"];
        $product_section=$_POST["product_section"];
        $product_varity=$_POST["product_varity"];
        $product_sticker=$_POST["product_sticker"];
        $product_quentity=$_POST["product_quentity"];
        $photo1=$_POST["photo1"];
        $photo2=$_POST["photo2"];
        $photo3=$_POST["photo3"];
        $photo4=$_POST["photo4"];
            
            
            if(mysqli_query($found,"UPDATE `add_product` SET `catagory_name` = '$catagory_name',`date` = '$date',`product_name`='$product_name',`product_description`='$product_description',`product_price`='$product_price',`product_section`='$product_section',`product_varity`='$product_varity',`product_sticker`='$product_sticker',`product_quentity`='$product_quentity',`photo1`='$photo1',`photo2`='$photo2',`photo3`='$photo3',`photo4`='$photo4' WHERE catagory_id= $id"));
                echo "data updated";
            //$_SESSION['message']='yes';
            header('location:Add_Product.php');
            
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
            
            <input type="text" class="form-control mt-1 mb-3" name="catagory_name" placeholder="Enter Catagory Name" value="<?php echo $name;?>">
            
           
      
            <input type="date" class="form-control mt-1 mb-1" name="date" placeholder="Enter date" value="<?php echo $catagory_name;?>">
            <input type="text" class="form-control mt-1 mb-1" name="product_name" placeholder="Enter product_name" value="<?php echo $date;?>">
            <input type="text" class="form-control mt-1 mb-1" name="catagory_Name" placeholder="Enter catagory_Name" value="<?php echo $product_description;?>">
            <input type="text" class="form-control mt-1 mb-1" name="product_description" placeholder="Enter product_description" value="<?php echo $product_price;?>">
            <input type="number" class="form-control mt-1 mb-1" name="product_price" placeholder="Enter product_price" value="<?php echo $product_section;?>">
            <input type="text" class="form-control mt-1 mb-1" name="product_section" placeholder="Enter product_ection" value="<?php echo $product_varity;?>">
            <input type="text" class="form-control mt-1 mb-1" name="product_varity" placeholder="Enter product_varity" value="<?php echo $product_sticker;?>">
            <input type="text" class="form-control mt-1 mb-1" name="product_sticker" placeholder="Enter product_sticker" value="<?php echo $product_quentity;?>">
            <input type="number" class="form-control mt-1 mb-1" name="product_quentity" placeholder="Enter product_quentity" value="<?php echo $photo1;?>">
             <input type="text" class="form-control mt-1 mb-1" name="photo1" placeholder="Enter file" value="<?php echo $photo2;?>">
             <input type="text" class="form-control mt-1 mb-1" name="photo2" placeholder="Enter file" value="<?php echo $photo3;?>">
             <input type="text" class="form-control mt-1 mb-1" name="photo3" placeholder="Enter file" value="<?php echo $photo4;?>">
             <input type="text" class="form-control mt-1 mb-1" name="photo4" placeholder="Enter file" value="<?php echo $product_name;?>">
            
            
      
      
      
      
      
      
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