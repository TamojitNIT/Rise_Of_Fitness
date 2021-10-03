<?php
include("dbconnection.php");
?>
<?php
if(isset($_REQUEST['send']))
{
if(($_REQUEST['email']=="")||($_REQUEST['question']==""))
{
echo'<script>window.alert("Fill All The Fields")</script>';
}
else
{
$email=$_REQUEST['email'];
$question=$_REQUEST['question'];
$sql="INSERT INTO outsider_query(email,question) VALUES('$email','$question')";
if(mysqli_query($conn,$sql))
{
echo'<script>window.alert("Send")</script>';
}
else
{
echo'<script>window.alert("Somethng_Went_Wrong")</script>';
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
  <div class="container-fluid" style="background-image: url(images/contactt.jpg);    
background-repeat:no-repeat;
background-position:center center;
background-size:cover;
height:100vh;">
    <div class="row">
   <div class="col-sm-4 offset-sm-4">
 <h3 class="text-center text-info">Contact US!</h3>
<form action="" method="post" class="shadow-lg p-4" style="background-color: rgb(0,0,0,0.6);">   
<div class="form-group">
<h5 class="text-white"><lable for="Email">Email</lable></h5>
<input type="email" placeholder="Write Your email" name="email" class="form-control">
<small class="font-italic text-info">Please Check Your Email before Submit</small>    
</div>    
<div class="form-group">
<h5 class="text-white"><lable for="Question's">Question's
</lable> </h5>   
<textarea class="form-control" style="height:100px;" placeholder="Tell Us What You Want"  name="question"></textarea>
</div>
<h5 class="text-white"><lable for="Submit">Submit</lable></h5>
<input type="submit" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; " value="Send"  name="send">
<a href="index.php" class="text-white btn btn-dark" style="border-color: firebrick; border-bottom-width: thick; ">Back_to_Home</a>
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



















