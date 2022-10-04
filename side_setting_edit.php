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
            
        
        
        $query = mysqli_query($found,"SELECT * FROM `site_setting` where `id`=$a");
        
            while($read=mysqli_fetch_array($query)){
                
            
        $id = $read['id'];
        $appname = $read['appname'];
    $text_color = $read['text_color'];
    $bg_color = $read['bg_color'];
    $button_color = $read['button_color'];
    $bar_color = $read['bar_color'];
    $font_logo = $read['font_logo'];
    $back_logo = $read['back_logo'];
    $copyright = $read['copyright'];
                  }
        }
        ?>


<?php 
        if(isset($_POST['submit'])){

        $appname = $_POST['appname'];
    $text_color = $_POST['text_color'];
    $bg_color = $_POST['bg_color'];
    $button_color = $_POST['button_color'];
    $bar_color = $_POST['bar_color'];
    $font_logo = $_POST['font_logo'];
    $back_logo = $_POST['back_logo'];
    $copyright = $_POST['copyright'];
            
if(mysqli_query($found,"UPDATE `site_setting` SET `appname` = '$appname',`text_color` = '$text_color',`bg_color`='$bg_color',`button_color`='$button_color',`bar_color`='$bar_color',`font_logo`='$font_logo',`back_logo`='$back_logo',`copyright`='$copyright' WHERE id= $id"));
                echo "data updated";
          
            header('location:side_setting.php');
            
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
  
     <input type="text" class="form-control mt-1 mb-1" name="appname" placeholder="Enter appname" value="<?php echo $appname;?>">
            <input type="color" class="form-control mt-1 mb-1" name="text_color" placeholder="Enter text_color" value="<?php echo $text_color;?>">
             <input type="color" class="form-control mt-1 mb-1" name="bg_color" placeholder="Enter bg_color" value="<?php echo $bg_color;?>">
             <input type="color" class="form-control mt-1 mb-1" name="button_color" placeholder="Enter button_color" value="<?php echo $button_color;?>">
             <input type="color" class="form-control mt-1 mb-1" name="bar_color" placeholder="Enter bar_color" value="<?php echo $bar_color;?>">
             <input type="text" class="form-control mt-1 mb-1" name="font_logo" placeholder="Enter font_logo" value="<?php echo $font_logo;?>">
             <input type="text" class="form-control mt-1 mb-1" name="back_logo" placeholder="Enter font_logo" value="<?php echo $back_logo;?>">
             <input type="text" class="form-control mt-1 mb-1" name="copyright" placeholder="Enter copyright" value="<?php echo $copyright;?>">
             

      
      
            
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