<!DOCTYPE html>
<html>
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
<?php
include "header.php";
    
    ?>
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
            
            <input type="text" class="form-control mt-1 mb-1" name="name" placeholder="Enter user Name" >
            <input type="email" class="form-control mt-1 mb-1" name="email" placeholder="Enter your email" >
            <input type="text" class="form-control mt-1 mb-1" name="phone" placeholder="Enter your phone" >
            <input type="text" class="form-control mt-1 mb-1" name="address" placeholder="Enter your address" >
             <input type="text" class="form-control mt-1 mb-1" name="city" placeholder="Enter your city" >
             <input type="number" class="form-control mt-1 mb-1" name="pincode" placeholder="Enter your pincode" >
             <input type="text" class="form-control mt-1 mb-1" name="street_name" placeholder="Enter your street_name" >
             <input type="text" class="form-control mt-1 mb-1" name="state" placeholder="Enter your state" >
          
            
            <input type="submit" name="submit" class="btn btn-success mt-1 mb-1" value="submit">
            
        </form>
        
        
        
<?php
include "config/connection_inc.php";
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $street_name = $_POST['street_name'];
    $state = $_POST['state'];
    if(mysqli_query($found,"INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `city`,`pincode`,`street_name`,`state`,`status`) VALUES ('NULL', '$name', '$email', '$phone', '$address','$city','$pincode','$street_name','$state', '1')")){
         
        echo "datafield";
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
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th class="text-center">PHONE</th>
<th class="text-center">ADDRESS</th>
  <th class="text-center">city</th>
  <th class="text-center">pincode</th>
   <th class="text-center">street_name</th>
<th class="text-center">state</th>
<th class="text-center">Status</th>
<th class="text-center">Action</th>
</tr>
</thead>
	<tbody>
										
								<?php
                                   include "config/connection_inc.php";         
                                            
	$sql=mysqli_query($found,"SELECT * FROM user");
	while($row=mysqli_fetch_assoc($sql)){
	?>
	<tr>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["city"]; ?></td>
        <td><?php echo $row["pincode"]; ?></td>
        <td><?php echo $row["street_name"]; ?></td>
        <td><?php echo $row["state"]; ?></td>
		<td><?php echo $row["status"]; ?></td>
		 <td>
     <a href ="userupdate.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-primary btn-sm">Approved</button></a>
       <a href ="usermanagement_edit.php?=<?php echo $row["id"]; ?>"><button class="btn btn-info btn-sm">Edit</button></a>
		<a href ="userdelete.php?id=<?php echo $row["id"];?>"><button class="btn btn-danger btn-sm">Delete</button></a>
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


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>