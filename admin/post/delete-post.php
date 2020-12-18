<?php 
include('../include/config.php');
$id=$_GET['id'];

$sql="delete from baiviet where ma_bviet= '$id'";
if(mysqli_query($conn,$sql)){
    header("Location:post.php");
}

?>