<?php 
include('../include/config.php');
$id=$_POST['id'];
$name=$_POST['name'];
$sql="update tacgia set ten_tacgia='$name' where ma_tacgia='$id'";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:author.php");
 }
?>