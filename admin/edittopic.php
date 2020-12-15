<?php
 include("header.php");
$id=$_GET['id'];
require("config.php");
$sql="select * from theloai where ma_tloai='$id'";
mysqli_set_charset($conn,'UTF8');
$result=mysqli_query($conn,$sql);

 //b3 xuly ketqua
 if(mysqli_num_rows($result)>0){
    $post=mysqli_fetch_assoc($result);
}

?>
<main class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="">ma tl</label>
            <?php  echo  '<input type="text" name="" id="" value="'.$post[0].'" >' ?>
            </div>
            <div class="form-group">
                <label for=""> tl</label>
            <?php  echo  '<input type="text" name="" id="" value="' .$post[1].'">' ?>
            </div>
            <div class="form-group">
                <input type="submit" value="">
            </div>
        </div>
    </div>
</main>