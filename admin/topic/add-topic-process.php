<?php 
include('../include/config.php');
$id=$_POST['id'];
$theloai=$_POST['tloai'];
$sql="insert into theloai  values ('$id',  '$theloai') ";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:topics.php");
 }
?>