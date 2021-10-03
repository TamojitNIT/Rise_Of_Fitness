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
<li class="nav-item"><a href="profile.php" class="nav-link">
<i class="fa fa-user mr-2"></i>Profile</a></li>    
<li class="nav-item"><a href="training.php"  class="nav-link bg-dark text-white" style="border-radius:10px;">
<i class="fa fa-cogs mr-2"></i>Let's Start Training</a></li> 
<li class="nav-item"><a href="submit.php" class="nav-link">
<i class="fa fa-keyboard-o mr-2"></i>Query</a></li> 
<li class="nav-item"><a href="changepass.php" class="nav-link">
<i class="fa fa-key mr-2"></i>Change Password</a></li> 
<li class="nav-item"><a href="feedback.php" class="nav-link">
<i class="fa fa-sign-out mr-2"></i>Feedback</a></li>
<li class="nav-item"><a href="../logout.php" class="nav-link">
<i class="fa fa-sign-out mr-2"></i>Logout</a></li>    
</ul>   
</div> 
</div>
<div class="col-sm-10" style="background-image: url(../images/train.jpg);
background-repeat:no-repeat; background-position:center center; background-size:cover; height:120vh;">
<div class="row">
<div class="col-sm-8 offset-sm-2">
<h2 class="text-white text-center">Book Your Training</h2>
<form action="" style="background-color: rgb(0,0,0,0.5);" method="post">
<div class="row">
<div class="col-sm-6 offset-sm-3">
<div class="form-group">
<div class="text-danger">
<lable for="Name">Name</lable>    
</div>    
<input type="text" placeholder="Write Your Name" class="form-control" name="name">
<small class="font-italic text-info">We Will Never Shear Your Personal Details</small> 
</div> 
</div>   
</div>
<div class="row">
<div class="col-sm-4 offset-sm-2 from-group">
<div class="text-danger"><lable for="Joining_Month">Joining_Month</lable></div> 
<select name="Join" id="" class="from-control">
<option value="">...</option>
<option value="january">january</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="june">june</option>
<option value="july">july</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>    
</select>  
<small class="font-italic text-info">Start Your Journey</small>  
</div>
<div class="col-sm-4 offset-sm-2">
<div class="text-danger"><lable for="Get_Training_for">Get_Training_for</lable></div> 
<select name="join" id="">
<option value="">...</option>
<option value="1">1month</option> 
 <option value="3">3months</option> 
 <option value="6">6months</option> 
 <option value="one">1year</option>   
</select> 
<small class="font-italic text-info">Start Your Journey</small>       
</div>   
</div>
<div class="row">
<div class="col-sm-6 offset-sm-3">
<div class="form-group">
<div class="text-danger">
<lable for="Address">Address</lable>    
</div>    
<input type="text" placeholder="Write Your Address" class="form-control" name="address">
<small class="font-italic text-info">We Will Never Shear Your Personal Details</small> 
</div> 
</div> 
</div>
<div class="row">
<div class="col-sm-3 offset-sm-5">
<input type="submit" value="Search" name="sub" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; ">
</div>
</div>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>