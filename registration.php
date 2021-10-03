<?php
include("dbconnection.php");
?>
<?php
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['name']=="")||($_REQUEST['phone']=="")||($_REQUEST['email']=="")||($_REQUEST['pass']=="")||($_REQUEST['conpass']=="")||empty($_FILES['image']))
{
echo'<script>window.alert("Fill all The Fields")</script>';
}
else
{
$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$conpass=$_REQUEST['conpass'];
$sql='SELECT email FROM registration WHERE email="'.$email.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
{
echo'<script>window.alert("Email Already Registerted")</script>';
}
else
{
if($pass==$conpass) 
{
$image=$_FILES['image']; 
$iname=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];
$exp=explode(".",$iname);
$ar=array("jpeg","png","jpg");
if(in_array(strtolower($exp[1]),$ar)) 
{
$un_img=uniqid().$iname;
move_uploaded_file($tmp_name,"profile_pic/".$un_img);
$sql="INSERT INTO registration(name,phone,email,pass,conpass,image)VALUES('$name','$phone','$email','$pass','$conpass','$un_img')";
if(mysqli_query($conn,$sql)) 
{
echo'<script>window.alert("Now You Are Become Member")</script>';
}
}
else
{
echo'<script>window.alert("Extension should Be in (jpeg,png,jpg Format)")</script>';    
}
}
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
<!-------------------Start Font Awesome--------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------End  Font Awesome---------------->    
<link rel="stylesheet" href="style.css">
<title>www.Rise_Of_Fitness.com</title>
</head>
<body>
<div class="container-fluid" style="background-image: url(images/people.jpg);    
background-repeat:no-repeat;
background-position:center center;
background-size:cover;
height:120vh;">
<div class="row">
<div class="col-sm-6 offset-sm-3">
<h2 class="text-center text-white">User_Registration</h2>
<form action="" class="shadow-lg p-4" method="post" enctype="multipart/form-data"  style="background-color: rgb(0,0,0,0.3);"> 
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<i class="fa fa-user text-danger"></i>
<label for="Name" class="text-danger">Name</label>
<input type="text" class="form-control" placeholder="Type The Name Here"  name="name"> 
<small class="font-italic text-info">Please Write your Full Name</small>  
</div>
</div> 
<div class="col-sm-6">
<div class="form-group">
<i class="fa fa-phone text-danger"></i>
<label for="Phone" class="text-danger">Phone</label>
<input type="text" placeholder="write Your Phone No" class="form-control" name="phone">
 <small class="font-italic text-info">We Will never Shear Your ph-no</small>    
</div>
</div>    
</div>
<div class="row">
<div class="col-sm-8 offset-sm-2">
<div class="form-group">
<i class="fa fa-keyboard-o text-danger"></i>    
<h5 class="text-danger"><lable for="Email">Email</lable></h5>
<input type="email" placeholder="Write Your Email" class="form-control" name="email">
<small class="font-italic text-info">We Will Never Shear Your Email</small>    
</div>    
</div>    
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<i class="fa fa-key text-danger"></i>
<label for="Password" class="text-danger">Password</label>
<input type="password" class="form-control" placeholder="Type Your Password"  name="pass"> 
<small class="font-italic text-info">We Will Never Shear Your Password</small>   
</div>
</div> 
<div class="col-sm-6">
<div class="form-group">
<i class="fa fa-key text-danger"></i>
<label for="Confirm_password" class="text-danger">Confirm_password</label>
<input type="password" class="form-control" name="conpass" placeholder="type your confirm_Password">
<small class="font-italic text-info">Please Check Your More Time Before Submit</small>     
</div>
</div>    
</div>
<div class="row">
<div class="offset-sm-4">
<div class="form-group">
<h5 class="text-danger"><lable for="Profie_Photo">Profile_Photo</lable></h5>
<input type="file" required name="image" class="text-white">    
</div>    
</div>   
</div>
<div class="row">
<div class="col-sm-7 offset-sm-2">
<input type="submit" value="Become_Member" name="sub" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; ">
<a href="index.php"  class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; ">Back To Home</a>
<a href="login.php"  class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick;">login</a>    
</div>    
</div>   
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