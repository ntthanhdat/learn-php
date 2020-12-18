<?php 
include('../include/config.php');
$id=$_POST['id'];
$tacgia=$_POST['name'];
$sql="insert into tacgia  values ('$id',  '$tacgia') ";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:author.php");
 }
?>