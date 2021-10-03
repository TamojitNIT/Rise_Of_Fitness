<?php
include("../dbconnection.php");
?>
<?php
session_start();
if(!isset($_SESSION['islogin']))
{
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['email']=="")||($_REQUEST['pass']==""))
{
echo'<script>window.alert("Fill All The Fields")</script>';    
}
else
{
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$sql="SELECT *FROM adminlogin WHERE email='".$email."' and pass='".$pass."'";
$res=(mysqli_query($conn,$sql));
if(mysqli_num_rows($res)==1) 
{
$_SESSION['email']=$email;
$_SESSION['islogin']=true;    
echo'<script>location.href="adminprofile.php"</script>';    
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
echo'<script>location.href="adminprofile.php"</script>';    
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

    <title>www.Rise_Of_Fitness.com</title>
  </head>
  <body>
    <div class="container-fluid" style="background-image: url(../images/adminlogin.jpg);
background-repeat:no-repeat; background-position:center center; background-size:cover; height:100vh;">
    <div class="row">
    <div class="col-sm-4 offset-sm-4 mt-5" style="background-color: rgb(0,0,0,0.6);">
    <h2 class="text-white text-center">Admin_Login</h2>
    <form action="" method="post">
    <div class="form-gorup">
    <div class="text-danger">
    <lable for="Email">Email</lable>
    <input type="email" placeholder="Write Your Email" name="email" class="form-control">
    <small class="font-italic text-info">We Will Never Shear Your Personal Details</small>     
    </div>    
    </div> 
    <div class="form-gorup">
    <div class="text-danger">
    <lable for="Password">Password</lable>
    <input type="password" placeholder="Write Your Password" name="pass" class="form-control">
    <small class="font-italic text-info">We Will Never Shear Your Personal Details</small>     
    </div>    
    </div> 
    <input type="submit" value="login" name="sub" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; margin-left:30px;"> 
    <a href="../index.php" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; margin-left:220px;">Back_To_Home</a>  
    </form>   
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