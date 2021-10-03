<?php
$my_host="localhost";
$my_user="root";
$my_pass="";
$my_db="rise_of_fitness";
$my_port="3307";
$conn=mysqli_connect($my_host,$my_user,$my_pass,$my_db,$my_port);
if(!$conn)
{
die("Connection Failed");    
}
?>