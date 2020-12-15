<?php
 include("../header.php");
include('../config.php');
$id=$_GET['id'];
$sql="select * from tacgia where ma_tacgia='$id'";
mysqli_set_charset($conn,'UTF8');
$result=mysqli_query($conn,$sql);

 //b3 xuly ketqua
 if(mysqli_num_rows($result)>0){
    $post=mysqli_fetch_assoc($result);
}
//print_r($post);
?>
<main class="container">

    <div class="row">
        <div class="col-md-12">
            <form action="edit-topic-process.php" method="post">
            <div class="form-group">
                <label for="">ma tl</label>
            <?php  echo  '<input type="text" name="id" id="" value="'.$post['ma_tacgia'].'" >' ?>
            </div>
            <div class="form-group">
                <label for=""> tl</label>
            <?php  echo  '<input type="text" name="name" id="" value="' .$post['ten_tacgia'].'">' ?>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
            </form>
            
        </div>
    </div>
</main>