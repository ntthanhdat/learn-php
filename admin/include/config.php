<?php
$conn=mysqli_connect('localhost','root','','music');

if(!$conn){
    die("kết nối thất bại ".mysqli_connect_error());
}
?>