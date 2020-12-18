<?php
 include("../include/header.php");
include('../include/config.php');
?>
<main class="container">

<div class="row">
    <div class="col-md-12">
        <form action="add-author-process.php" method="post">
        <div class="form-group">
            <label for="">Mã tác giả</label>
        <?php  echo  '<input type="text" name="id" id="" value="" >' ?>
        </div>
        <div class="form-group">
            <label for="">Tên tác giả</label>
        <?php  echo  '<input type="text" name="name" id="" value="">' ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
        </form>
        
    </div>
</div>
</main>