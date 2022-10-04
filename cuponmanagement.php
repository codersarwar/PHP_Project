
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
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>

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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 
 ADD CUPON
</button>

<!-- Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
     <form action="" method="post">
            
            <input type="text" class="form-control mt-1 mb-1" name="cuponcode" placeholder="Enter cuponcode">
            <input type="date" class="form-control mt-1 mb-1" name="expirydate" placeholder="Enter expirydate">
            <input type="number" class="form-control mt-1 mb-1" name="amount" placeholder="Enter amount">
           
          
            
            <input type="submit" name="submit" class="btn btn-success mt-1 mb-1" value="submit">
            
        </form>
      </div>

      <!-- Modal footer -->
    
        
        
        
<?php
include "config/connection_inc.php";
if(isset($_POST['submit'])){
    
    $cuponcode = $_POST['cuponcode'];
    $expirydate = $_POST['expirydate'];
    $amount = $_POST['amount'];

    if(mysqli_query($found,"INSERT INTO `cupon_code` (`id`, `cuponcode`, `expirydate`, `amount`) VALUES ('NULL', '$cuponcode', '$expirydate', '$amount')")){
         
        echo "datafield";
        }
        else{
            echo "data not field";
        }
    
}





?>     <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
     











<div class="table-responsive no-radius">
<table class="table table-hover table-center text-center">
<thead>
<tr>
<th class="text-center">ID</th>
<th class="text-center">CUPONCODE</th>
<th class="text-center">EXPIRYDATE</th>
<th class="text-center">AMOUNT</th>
<th class="text-center">ACTION</th>
</tr>
</thead>
	<tbody>
										
								<?php
                                   include "config/connection_inc.php";         
                                            
	$sql=mysqli_query($found,"SELECT * FROM cupon_code");
	while($row=mysqli_fetch_assoc($sql)){
	?>
	<tr>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["cuponcode"]; ?></td>
		<td><?php echo $row["expirydate"]; ?></td>
		<td><?php echo $row["amount"]; ?></td>
	
		
		 <td>
    
       <a href ="cuponedit.php?id=<?php echo $row["id"];?>"><button class="btn btn-info btn-sm">Edit</button></a>
		 <a href ="cupondlete.php?id=<?php echo $row["id"];?>"><button class="btn btn-danger btn-sm">Delete</button></a>
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