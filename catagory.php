<?php
ob_start();
session_start();
//if(!isset($_SESSION['login'])){
//    header('location:login.php');
//}
//else{
//    header('location:index.php');
//}
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

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
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
<div class="row">
<div class="col-md-12 d-flex">

<div class="card card-table flex-fill">
<div class="card-header">
<div class="table-search float-end">
<input type="text" class="form-control" placeholder="Search">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</div>
</div>
<div class="card-body">

<button type="button" class="btn btn-primary mb-3 ml-2" data-toggle="modal" data-target="#exampleModal">
 Add to Card
</button>
   
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="" method="post">
            
            <input type="text" class="form-control mt-1 mb-1" name="Catagory_Name" placeholder="Enter Catagory Name">
            <textarea type="text" class="form-control mt-1 mb-1" name="Catagory_Description" placeholder=" Enter Catagory Description"></textarea>
            
            <input type="submit" name="submit" class="btn btn-success mt-1 mb-1" value="submit">
            
        </form>
        
        
<?php
include "config/connection_inc.php";
if(isset($_POST['submit'])){
    
    $text = $_POST['Catagory_Name'];
    $details = $_POST['Catagory_Description'];
    if(mysqli_query($found,"INSERT INTO `product_catagory`  (`catagory_id`, `catagory_name`, `catagory_description`, `status`) VALUES (NULL, '$text', '$details', '1')")){
    $_SESSION['message']='yes';
    
        }
        else{
            echo "data not field";
        }
    
}





?>  
      </div>
    
    </div>
  </div>
</div>











<div class="table-responsive no-radius">
<table class="table table-hover table-center text-center">
<thead>
<tr>
<th>Catagory_Id</th>
<th>Catagory_name</th>
<th class="text-center">Catagory_Description</th>
<th class="text-center">Status</th>
<th class="text-center">Action</th>
</tr>
</thead>
	<tbody>
										
								<?php
                                   include "config/connection_inc.php";         
                                            
	$sql=mysqli_query($found,"SELECT * FROM product_catagory");
	while($row=mysqli_fetch_assoc($sql)){
        $id=$row['catagory_id'];
        $valu=$row["status"];
	?>
	<tr>
	<td><?php echo $id; ?></td>
		<td><?php echo $row["catagory_name"]; ?></td>
		<td><?php echo $row["catagory_description"]; ?></td>
		<td><?php if($valu=='1'){
        echo "<button class='btn btn-danger'>Unpublihed</button> ";
    } if($valu=='2'){
        echo "<button class='btn btn-success'>Publihed</button> ";
    }
            ?></td>
		 <td>
             <?php
        if($valu=='1'){
            echo "<a href ='update.php?id={$id}'><button class='btn btn-success btn-sm'>Approved</button></a>";
        }if($valu=='2'){
          echo "<a href ='update.php?uid={$id}'><button class='btn btn-danger btn-sm'>unapproved</button></a>"; 
        }
        
        ?>
       
       
       
        <a href ="edit.php?id=<?php echo $row["catagory_id"]; ?>"><button class="btn btn-info btn-sm">Edit</button></a>
		 <a href ="delete.php?catagory_id=<?php echo $row["catagory_id"]; ?>"><button class="btn btn-danger btn-sm">Delete</button></a>
		</td>
	</tr>
	<?php } ?>
										
										
										
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    <?php  
    if(isset($_SESSION["message"])){
     
    ?>
     alertify.set('notifier','position', 'top-right');
 alertify.success('Product add successfully');<?php unset($_SESSION["message"]); }?>
    
    </script>
<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>