<?php
session_start();
//if(isset($_SESSION['login'])){
//    header('location:index.php');
//}
//else{
//    header('location:login.php');
//}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "config/connection_inc.php";
if(isset($_POST['submit'])){
    
    $username=mysqli_real_escape_string($found,$_POST['mail']);
    $password=mysqli_real_escape_string($found,$_POST['password']);
    
    $query="SELECT * FROM admin_user WHERE username='$username' AND password='$password'";
    $con=mysqli_query($found,$query);
    $count=mysqli_num_rows($con);
    if($count>0){
        $_SESSION['login']='yes';
         $_SESSION['login_name']='$username';   
        
        header('location:index.php');
         
    }else{
        $error="please enter correct details";
    }
        
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Dreamchat - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="aset/img/favicon.png">

<link rel="stylesheet" href="aset/css/bootstrap.min.css">

<link rel="stylesheet" href="aset/css/font-awesome.min.css">

<link rel="stylesheet" href="aset/css/feathericon.min.css">

<link rel="stylesheet" href="aset/plugins/morris/morris.css">

<link rel="stylesheet" href="aset/css/style.css">
<link rel="stylesheet" href="asset/css/color.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-right">
<div class="login-right-wrap">
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>
<p class="red"> <?php echo @$error; ?></p>
<form action="" method="post">
<div class="form-group">
<input type="email" id="form1Example1" class="form-control" name="mail"/ placeholder="enter your email">
</div>
<div class="form-group">
<input type="password" id="form1Example2" class="form-control" name="password"/ placeholder="enter your password">
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
</div>
</form>


</div>
</div>
</div>
</div>
</div>
</div>


<script src="aset/js/jquery-3.6.0.min.js"></script>

<script src="aset/js/bootstrap.bundle.min.js"></script>

<script src="aset/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="aset/js/script.js"></script>
</body>
</html>