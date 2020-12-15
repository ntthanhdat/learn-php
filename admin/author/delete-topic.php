<?php
include('../config.php');
$id=$_GET['id'];
$sql="delete from theloai where ma_tloai= '$id'";
if(mysqli_query($conn,$sql)){
    header("Location:topics.php");
}

?>