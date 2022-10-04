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
            
        
        
        $query = mysqli_query($found,"SELECT * FROM `social_link` where `id`=$a");
        
            while($read=mysqli_fetch_array($query)){
                
            
        $id = $read['id'];
       $youtube_link = $read['youtube_link'];
    $facebook_link = $read['facebook_link'];
    $linkedin_link = $read['linkedin_link'];
    
                  }
        }
        ?>


<?php 
        if(isset($_POST['submit'])){

        $youtube_link = $_POST['youtube_link'];
    $facebook_link = $_POST['facebook_link'];
    $linkedin_link = $_POST['linkedin_link'];
    
if(mysqli_query($found,"UPDATE `social_link` SET `youtube_link` = '$youtube_link',`facebook_link` = '$facebook_link',`linkedin_link`='$linkedin_link' WHERE id= $id"));
                echo "data updated";
          
            header('location:social_link.php');
            
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
            
            <input type="text" class="form-control mt-1 mb-1" name="youtube_link" placeholder="Enter youtube_link" value="<?php echo $youtube_link;?>">
            <input type="text" class="form-control mt-1 mb-1" name="facebook_link" placeholder="Enter facebook_link" value="<?php echo $facebook_link;?>">
             <input type="text" class="form-control mt-1 mb-1" name="linkedin_link" placeholder="Enter linkedin_link" value="<?php echo $linkedin_link;?>">
             

            
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