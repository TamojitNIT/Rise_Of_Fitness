<?php
include("dbconnection.php");
?>
<?php
session_start();
if(!isset($_SESSION['islogin']))
{
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['email']=="")||($_REQUEST['pass']==""))
{
echo'<script>window.alert("FILL all the Fields")</script>';
}
else
{
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$sql="SELECT *FROM registration WHERE email='".$email."' and pass='".$pass."'";
$res=(mysqli_query($conn,$sql));
if(mysqli_num_rows($res)==1) 
{
$_SESSION['email']=$email;
$_SESSION['islogin']=true;    
echo'<script>location.href="user/profile.php"</script>';    
}
else
{
echo'<script>window.alert("Do Your Registration First")</script>';    
}
}
}
}
else
{
echo'<script>location.href="user/profile.php"</script>';
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
<!-------------------Start Font Awesome--------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------End  Font Awesome---------------->
<title>www.Rise_Of_Fitness.com</title>
</head>
<body>   
<div class="container-fluid" style=" background-image: url(images/login.png);    
background-repeat:no-repeat;
background-position:center center;
background-size:cover;
height:80vh;">
<div class="row">
<div class="col-sm-4 offset-sm-4">
<h1 class="text-center text-dark">User_login<i class="fa fa-address-card text-dark"></i></h1> 
<form action="" method="post" class="p-4" style="background-color: rgb(0,0,0,0.6);">
<div class="form-group">
<i class="fa fa-keyboard-o text-white"></i>    
<h5 class="text-white"><lable for="Email">Email</lable></h5>
<input type="email" placeholder="Write Your Email" class="form-control" name="email">
<small class="font-italic text-info">We Will Never Shear Your Email</small>    
</div> 
<div class="form-group">
<i class="fa fa-key text-white"></i>
<h5 class="text-white"><lable for="Password">Password</lable></h5>
<input type="password" placeholder="Write Your password" class="form-control" name="pass">
<small class="font-italic text-info">We Will Never Shear Your Password</small>    
</div>  
<input type="submit" value="Become_Member" name="sub" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; ">
<a href="index.php" class="text-white btn btn-dark ml-2" style="border-color: firebrick; border-bottom-width: thick;">Back_to_Home</a>   
</form>   
</div>    
</div>    
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>