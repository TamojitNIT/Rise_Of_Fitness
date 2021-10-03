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
<?php
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['email']=="")||($_REQUEST['query']==""))
{
echo'<script>window.alert("fill Your Query First")</script>';    
}
else
{
$email=$_REQUEST['email'];
$query=$_REQUEST['query'];
$sql="INSERT INTO member_query (email,query) VALUES('$email','$query')";
if(mysqli_query($conn,$sql))
{
echo'<script>window.alert("Send")</script>';
}
else
{
echo'<script>window.alert("Something_Went_Wrong")</script>';
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
<li class="nav-item"><a href="profile.php" class="nav-link">
<i class="fa fa-user mr-2"></i>Profile</a></li>    
<li class="nav-item"><a href="training.php" class="nav-link">
<i class="fa fa-cogs mr-2"></i>Let's Start Training</a></li> 
<li class="nav-item"><a href="submit.php" class="nav-link bg-dark text-white" style="border-radius:10px;">
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
<div class="col-sm-10" style="background-image: url(../images/questionn.jpg);
background-repeat:no-repeat; background-position:center center; background-size:cover; height:120vh;">
<div class="row">
<div class="col-sm-5 offset-sm-4">
<h2 class="text-center">
Any Question's    
</h2>
<form action="" style="background-color: rgb(0,0,0,0.5);" method="post">
<div class="from-group">
<div class="text-danger text-center">
<lable for="Email">Email</lable>    
</div>
<input type="email" value="<?php echo $email;?>" readonly class="form-control" name="email">
<small class="font-italic text-info">We Will Never Shear Your Email</small> 
</div>    
<div class="form-group">
<div class="text-danger text-center">
<lable for="Query">Query</lable>
<textarea name="query" class="form-control" style="height:100px;" id="" cols="30" rows="10"></textarea>
<small class="font-italic text-info">Write Your Question Within 300 words</small>     
</div>    
</div>
<input type="submit" value="Search" name="sub" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; margin-left:220px;">
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