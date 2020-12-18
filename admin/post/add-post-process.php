<?php 
include('../include/config.php');
$id=$_POST['id'];
$tieude=$_POST['tieude'];
$bhat=$_POST['ten_bhat'];
$theloai=$_POST['ma_tloai'];
$tomtat=$_POST['tomtat'];
$tacgia=$_POST['ma_tgia'];
$baiviet=$_POST['baiviet'];
$sql="insert into baiviet(ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia, baiviet) values ('$id', '$tieude', '$bhat', '$theloai', '$tomtat', '$tacgia', '$baiviet' ) ";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:post.php");
 }
?>