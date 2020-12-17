<?php
include('../include/config.php');
$id=$_GET['id'];
$sql="delete from tacgia where ma_tacgia= '$id'";
if(mysqli_query($conn,$sql)){
    header("Location:author.php");
}

?>