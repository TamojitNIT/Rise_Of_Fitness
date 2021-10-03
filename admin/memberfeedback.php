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
echo'<script>location.href="adminlogin.php"</script>';
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
 <div class="container-fluid">
<div class="row">
<div class="col-sm-2 bg-light sidebar">
<div class="sidebar-sticky">
<ul class="nav flex-column">
<a href="adminprofile.php" class="navbar-brand">
<span class="navbar-brand"><img src="../images/images.jfif" style="height:120px; width:180px;" alt=""></span></a> 
<li class="nav-item"><a href="adminprofile.php" class="nav-link" style="border-radius:10px;">Admin_Profile</a></li> 
<li class="nav-item"><a href="memberquery.php" class="nav-link" style="border-radius:10px;">Member_Query</a></li> 
<li class="nav-item"><a href="outsiderquery.php" class="nav-link" style="border-radius:10px;">Outsider_Query</a></li> 
<li class="nav-item"><a href="memberfeedback.php" class="nav-link bg-dark text-white" style="border-radius:10px;">Member_Feedback</a></li>
<li class="nav-item"><a href="changepass.php" class="nav-link " style="border-radius:10px;">Change_Password</a></li>
<li class="nav-item"><a href="addtrainer.php" class="nav-link " style="border-radius:10px;">Add_Trainer</a></li>
<li class="nav-item"><a href="logout.php" class="nav-link" style="border-radius:10px;">Logout</a></li>      
</ul>    
</div>    
</div>
<div class="col-sm-10">
<div class="row">
<?php
$sql="SELECT *FROM feedback";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
echo'<div class="col-sm-3 offset-sm-1 mt-5">';
echo'<div class="card text-center" style="background-color: rgb(0,0,0,0.5);">';
echo'<div class="card-header bg-secondary text-white">Name:'.$row['name'].'</div>';
echo'<img src="../profile_pic/'.$row['image'].'" style="height:100px; width:150px; margin-left:50px; border-radius:50px;">';
echo'<div class="card-body">Feedback:'.$row['feedback'].'</div>';   
echo'<form action="" method="post">
<input type="submit" value="delete" name="delete" class="btn btn-danger"> 
<input type="hidden" name="slno" value='.$row['slno'].'>
</form>';     
echo'</div>';    
echo'</div>';    
}
}
?>
</div>    
</div>
</div>
</div>
<?php
if(isset($_REQUEST['delete']))
{
$slno=$_REQUEST['slno'];
$sql="DELETE FROM feedback WHERE slno='".$slno."'";
if(mysqli_query($conn,$sql))
{
echo'<script>location.href="memberfeedback.php"</script>';
}
}      
?>
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