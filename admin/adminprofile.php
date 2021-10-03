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
<?php
$sql="SELECT *FROM registration";
$result=mysqli_query($conn,$sql);
$count1=mysqli_num_rows($result);
?>
<?php
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['fee']=="")||($_REQUEST['adfee']=="")||($_REQUEST['join']=="")||($_REQUEST['age']==""))
{
echo'<script>window.alert("fill All The Fields")</script>'; 
}
else
{
$fee=$_REQUEST['fee'];
$adfee=$_REQUEST['adfee'];    
$join=$_REQUEST['join'];
$age=$_REQUEST['age']; 
$sql="INSERT INTO upload_program(fee,adfee,training,age)VALUES('$fee','$adfee','$join','$age')";
if(mysqli_query($conn,$sql))
{
echo'<script>window.alert("Program_uploaded")</script>';
}
else
{
echo'<script>window.alert("Something_went_Wrong")</script>';
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
<li class="nav-item"><a href="adminprofile.php" class="nav-link bg-dark text-white" style="border-radius:10px;">Admin_Profile</a></li> 
<li class="nav-item"><a href="memberquery.php" class="nav-link" style="border-radius:10px;">Member_Query</a></li> 
<li class="nav-item"><a href="outsiderquery.php" class="nav-link" style="border-radius:10px;">Outsider_Query</a></li> 
<li class="nav-item"><a href="memberfeedback.php" class="nav-link" style="border-radius:10px;">Member_Feedback</a></li>
<li class="nav-item"><a href="changepass.php" class="nav-link" style="border-radius:10px;">Change_Password</a></li>
<li class="nav-item"><a href="addtrainer.php" class="nav-link " style="border-radius:10px;">Add_Trainer</a></li>
<li class="nav-item"><a href="logout.php" class="nav-link" style="border-radius:10px;">Logout</a></li>      
</ul>    
</div>    
</div> 
<div class="col-sm-10" style="background-image: url(../images/adminprofile.jpg);
background-repeat:no-repeat; background-position:center center; background-size:cover; height:100vh;">
<div class="row mt-5">
<div class="col-sm-4 ">
<div class="card text-white" style="background-color: rgb(0,0,0,0.5);">
<div class="card-header">
<div class="card-text"><h2>Active_Member</h2></div>
</div>    
<div class="card-body">
<h2><?php echo $count1; ?></h2>
<a href="" class="btn btn-dark btn btn-sm" value="view">view</a>    
</div>
</div>    
</div>
<div class="col-sm-4">
<div class="card text-white" style="background-color: rgb(0,0,0,0.5);">
<div class="card-header">
<div class="card-text"><h2>All_About_Plan</h2></div>
</div>    
<div class="card-body">
<h2><?php echo $count1; ?></h2>
<a href="" class="btn btn-dark btn btn-sm" value="view">view</a>    
</div>
</div>    
</div>  
<div class="col-sm-4">
<div class="card text-white" style="background-color: rgb(0,0,0,0.5);">
<div class="card-header">
<div class="card-text"><h2>Trainer_Details</h2></div>
</div>    
<div class="card-body">
<h2><?php echo $count1; ?></h2>
<a href="" class="btn btn-dark btn btn-sm" value="view">view</a>    
</div>
</div>    
</div>  
</div> 
<div class="row">
<div class="col-sm-5 offset-sm-3 mt-5">
<h2 class="text-center text-success">Upload_Program</h2>
<form action="" style="background-color: rgb(0,0,0,0.5);" method="post">
<div class="row">
<div class="col-sm-6 offset-sm-3">
<div class="form-group">
<div class="text-danger">
<lable for="Fee">Fee</lable>    
</div>    
<input type="text" placeholder="Write Your Fee" class="form-control" name="fee">
<small class="font-italic text-info">We Will Never Shear Your Personal Details</small> 
</div> 
</div>   
</div>
<div class="row">
<div class="col-sm-6 offset-sm-1">
<div class="form-group">
<div class="text-danger">
<lable for="Admission_Fee">Admission_Fee</lable>    
</div>    
<input type="text" placeholder="Write Your Admission Fee" class="form-control" name="adfee">
<small class="font-italic text-info">We Will Never Shear Your Personal Details</small> 
</div> 
</div>
<div class="col-sm-3 offset-sm-2">
<div class="text-danger"><lable for="Get_Training_for">Get_Training_for</lable></div> 
<select name="join" id="">
<option value="">...</option>
<option value="1m">1month</option> 
 <option value="3m">3months</option> 
 <option value="6m">6months</option> 
 <option value="1y">1year</option>   
</select>  
<small class="font-italic text-info">Upload Journey</small>       
</div>   
</div>
<div class="row">
<div class="col-sm-6 offset-sm-3">
<div class="form-group">
<div class="text-danger">
<lable for="Age_Gap">Age_Gap</lable>    
</div>    
<input type="text" placeholder="Write Age Gap" class="form-control" name="age">
<small class="font-italic text-info">Upload Age</small> 
</div> 
</div> 
</div>
<div class="row">
<div class="col-sm-3 offset-sm-3">
<input type="submit" value="Upload" name="sub" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; ">
</div>
<div class="col-sm-3 offset-sm-1">
<a href="adminprofile.php" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; ">Refresh</a>
</div>
</div>
</form>
</div>    
</div>   
</div>   
</div> 
</div>
<div class="container">
<div class="row mb-3">
<?php
$sql="SELECT *FROM upload_program";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo'<div class="col-sm-3 offset-sm-1 mt-5">';
echo'<div class="card text-center" style="background-color: rgb(0,0,0,0.5);">';
echo'<div class="card-header bg-secondary text-white">Program_no:'.$row['slno'].'</div>';
echo'<div class="card-body">Fee:'.$row['fee'].'</div>';
echo'<div class="card-body">Admission_Fee:'.$row['adfee'].'</div>'; 
echo'<div class="card-body">Traninig_for:'.$row['training'].'</div>';
echo'<div class="card-body">Age_Gap:'.$row['age'].'</div>';  
echo'<div class="card-footer">
<form action="" method="post">
<input type="hidden" name="slno" value='.$row['slno'].'> 
<input type="submit" class="btn btn-danger" value="Delete" name="delete">  
</form>';
echo'</div>';    
echo'</div>';    
echo'</div>';    
}
}     
?>
</div>    
</div>
<?php
if(isset($_REQUEST['delete']))
{
$slno=$_REQUEST['slno'];
$sql="DELETE FROM upload_program WHERE slno='".$slno."'";
if(mysqli_query($conn,$sql))
{
echo'<script>location.href="adminprofile.php"</script>';    
}
else
{
echo'<script>window.alert("something_went_wrong")</script>';    
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