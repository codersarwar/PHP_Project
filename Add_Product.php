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
        
        <form action="" method="post" enctype="multipart/form-data">
            
           
            <input type="date" class="form-control mt-1 mb-1" name="date" placeholder="Enter date">
            <input type="text" class="form-control mt-1 mb-1" name="product_name" placeholder="Enter product_name">
           
     <select id="inputState" type="text" class="form-control" name="catagory_Name">
        <option selected>Choose...</option>
        <option>potato</option>
         <option>Dell50124</option>
      </select>
            
            
            
            
            
            
            
            
            
            <input type="text" class="form-control mt-1 mb-1" name="product_description" placeholder="Enter product_description">
            <input type="number" class="form-control mt-1 mb-1" name="product_price" placeholder="Enter product_price">
            <input type="text" class="form-control mt-1 mb-1" name="product_section" placeholder="Enter product_ection">
            <input type="text" class="form-control mt-1 mb-1" name="product_varity" placeholder="Enter product_varity">
            <input type="text" class="form-control mt-1 mb-1" name="product_sticker" placeholder="Enter product_sticker">
            <input type="number" class="form-control mt-1 mb-1" name="product_quentity" placeholder="Enter product_quentity">
             <input type="file" class="form-control mt-1 mb-1" name="photo1" placeholder="Enter file" >
             <input type="file" class="form-control mt-1 mb-1" name="photo2" placeholder="Enter file">
             <input type="file" class="form-control mt-1 mb-1" name="photo3" placeholder="Enter file">
             <input type="file" class="form-control mt-1 mb-1" name="photo4" placeholder="Enter file">
            
            
            
            <input type="submit" name="submit" class="btn btn-success mt-1 mb-1" value="submit">
            
        </form>
        
        
<?php
include "config/connection_inc.php";
if(isset($_POST['submit'])){
    
   
    $date = $_POST['date'];
    $product_name = $_POST['product_name'];
     $catagory_Name = $_POST['catagory_Name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_section = $_POST['product_section'];
    $product_varity = $_POST['product_varity'];
    $product_sticker = $_POST['product_sticker'];
    $product_quentity = $_POST['product_quentity'];
    
    
        $filename1 = $_FILES["photo1"]["name"];
    $tempname1 = $_FILES["photo1"]["tmp_name"];
    $folder1 = "image1/" . $filename1;
    
      $filename2 = $_FILES["photo2"]["name"];
    $tempname2 = $_FILES["photo2"]["tmp_name"];
    $folder2 = "image2/" . $filename2;
    
      $filename3 = $_FILES["photo3"]["name"];
    $tempname3 = $_FILES["photo3"]["tmp_name"];
    $folder3 = "image3/" . $filename3;
    
      $filename4 = $_FILES["photo4"]["name"];
    $tempname4 = $_FILES["photo4"]["tmp_name"];
    $folder4 = "image4/" . $filename4;
    
    
    
    
    if(mysqli_query($found,"INSERT INTO `add_product` (`id`, `date`, `product_name`, `catagory_name`, `product_description`, `product_price`, `product_section`, `photo1`, `photo2`, `photo3`, `photo4`, `product_varity`, `product_sticker`, `product_quentity`) VALUES (NULL, '$date', '$product_name', '$catagory_Name', '$product_description', '$product_price', '$product_section', '$filename1', '$filename2', '$filename3', '$filename4', '$product_varity', '$product_sticker', '$product_quentity')")){
        
     move_uploaded_file($tempname1, $folder1);
        move_uploaded_file($tempname2, $folder2);
        move_uploaded_file($tempname3, $folder3);
        move_uploaded_file($tempname4, $folder4);
        echo "data filed";
    
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
<th>catagory_name</th>
<th class="text-center">date</th>
<th class="text-center">product_name</th>
<th class="text-center">product_description</th>
    <th class="text-center">product_price</th>
    <th class="text-center">product_section</th>
    <th class="text-center">product_varity</th>
    <th class="text-center">product_sticker</th>
    <th class="text-center">product_quentity</th>
    <th class="text-center">photo1</th>
    <th class="text-center">photo2</th>
    <th class="text-center">photo3</th>
    <th class="text-center">photo4</th>
    
</tr>
</thead>
	<tbody>
										
								<?php
                                   include "config/connection_inc.php";         
                                            
	$sql=mysqli_query($found,"SELECT * FROM add_product");
	while($row=mysqli_fetch_assoc($sql)){
        $id=$row['id'];
        $catagory_name=$row["catagory_name"];
        $date=$row["date"];
        $product_name=$row["product_name"];
        $product_description=$row["product_description"];
        $product_price=$row["product_price"];
        $product_section=$row["product_section"];
        $product_varity=$row["product_varity"];
        $product_sticker=$row["product_sticker"];
        $product_quentity=$row["product_quentity"];
        $photo1=$row["photo1"];
        $photo2=$row["photo2"];
        $photo3=$row["photo3"];
        $photo4=$row["photo4"];
        
        
        
	?>
        
        
	<tr>
	<td><?php echo $id; ?></td>
		<td><?php echo $row["catagory_name"]; ?></td>
		<td><?php echo $row["date"]; ?></td>
        <td><?php echo $row["catagory_name"]; ?></td>
        <td><?php echo $row["product_name"]; ?></td>
        <td><?php echo $row["product_description"]; ?></td>
        <td><?php echo $row["product_section"]; ?></td>
        <td><?php echo $row["product_varity"]; ?></td>
        <td><?php echo $row["product_sticker"]; ?></td>
        <td><?php echo $row["product_quentity"]; ?></td>
         <td>  <img src="image1/<?php echo $photo1;?>" style="width:80px; height:100px;"></td>
        <td>  <img src="image2/<?php echo $photo2;?>" style="width:80px; height:100px;"></td>
        
       
         <td>  <img src="image3/<?php echo $photo3;?>" style="width:80px; height:100px;"></td>
         <td>  <img src="image4/<?php echo $photo4;?>" style="width:80px; height:100px;"></td>
        
        
    
		 <td>
       
       
       
        <a href ="Add_product_edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-info btn-sm">Edit</button></a>
		 <a href ="Add_product_delete.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger btn-sm">Delete</button></a>
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