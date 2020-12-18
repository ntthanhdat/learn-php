<?php 
include('../include/config.php');
$id=$_POST['id'];
$tieude=$_POST['tieude'];
$bhat=$_POST['ten_bhat'];
$theloai=$_POST['ma_tloai'];
$tomtat=$_POST['tomtat'];
$tacgia=$_POST['ma_tgia'];
$baiviet=$_POST['baiviet'];
$sql="update baiviet set tieude='$tieude', ten_bhat='$bhat', ma_tloai='$theloai', tomtat='$tomtat', ma_tgia='$tacgia', baiviet='$baiviet' where ma_bviet='$id'";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:post.php");
 }
?>