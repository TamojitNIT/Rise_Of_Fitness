<?php
include("../dbconnection.php");
?>
<?php
session_start();
if(isset($_SESSION['islogin']))
{
$email=$_SESSION['email'];    
}
else
{
echo'<script>location.href="../login.php"</script>';
}
?>
<?php
$sql='SELECT *FROM registration WHERE email="'.$email.'"';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$img=$row['image'];
$name=$row['name'];
$pass=$row['pass'];
?>
<?php
if(isset($_REQUEST['sub']))
{
if($_REQUEST['pass']=="")
{
echo'<script>window.alert("fill All The Fields")</script>';
}
else
{
$pass=$_REQUEST['pass'];
$conpass=$_REQUEST['pass'];
$sql="UPDATE registration SET pass='$pass',conpass='$conpass' WHERE email='".$email."'";
if(mysqli_query($conn,$sql))
{
echo'<script>window.alert("Password_Updated")</script>';
}    
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

 <link rel="stylesheet" href="style.css">   
    <title>www.Rise_Of_Fitness.com</title>
  </head>
  <body>  
<div class="container-fluid">
<div class="row">
<div class="col-sm-2 bg-light sidebar">
<div class="sidebar-sticky">
<ul class="nav flex-column">
<img src="<?php echo "../profile_pic/".$img;?>" class="rounded-circle" style="height:150px; width:150px; margin-bottom:30px;">
<li class="nav-item"><a href="profile.php" class="nav-link" >
<i class="fa fa-user mr-2"></i>Profile</a></li>    
<li class="nav-item"><a href="training.php" class="nav-link">
<i class="fa fa-cogs mr-2"></i>Let's Start Training</a></li> 
<li class="nav-item"><a href="submit.php" class="nav-link">
<i class="fa fa-keyboard-o mr-2"></i>Query</a></li> 
<li class="nav-item"><a href="changepass.php" class="nav-link bg-dark text-white" style="border-radius:10px;">
<i class="fa fa-key mr-2"></i>Change Password</a></li> 
<li class="nav-item"><a href="feedback.php" class="nav-link">
<i class="fa fa-sign-out mr-2"></i>Feedback</a></li>
<li class="nav-item"><a href="../logout.php" class="nav-link">
<i class="fa fa-sign-out mr-2"></i>Logout</a></li>    
</ul>   
</div> 
</div>
<div class="col-sm-10" style="background-image: url(../images/changepass.jpg);
background-repeat:no-repeat; background-position:center center; background-size:cover; height:100vh;">
<div class="row">
<div class="col-sm-4 offset-sm-4"  style="background-color: rgb(0,0,0,0.5);">
<h2 class="text-center text-white">Change_Your_Password</h2>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<i class="fa fa-user mr-2"></i>
<div class="text-danger"><label for="Email">Email</label></div>
<input type="email" class="form-control" value="<?php echo $email; ?>" readonly>
<small class="font-italic text-info">We Will Never Shear Your Personal Details</small>    
</div>
<div class="form-group">
<i class="fa fa-user mr-2"></i>
<div class="text-danger"><label for="Password">Password</label></div>
<input type="text" class="form-control" value="<?php echo $pass; ?>" name="pass">
<small class="font-italic text-info">We Will Never Shear Your Personal Details</small>    
</div>
<input type="submit" value="Update" name="sub" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick;  margin-left:150px;">
<?php if(isset($msg)){echo $msg;}?>
</form> 
</div>
</div>
</div>
</div>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>