<?php 
include('../config.php');
$id=$_GET['id'];
if(!$conn){
    die("kết nối thất bại ".mysqli_connect_error());
}

//buoc 2 khai bao truy van sql
//$sql="select * from baiviet";
$sql="delete from baiviet where ma_bviet= '$id'";
if(mysqli_query($conn,$sql)){
    header("Location:../index.php");
}

?>