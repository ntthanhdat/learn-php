<?php 
include('../include/config.php');
$id=$_POST['id'];
$name=$_POST['name'];
$sql="update theloai set ten_tloai='$name' where ma_tloai='$id'";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:topics.php");
 }
?>