<?php
 include("../include/header.php");
include('../include/config.php');
?>
<main class="container">

    <div class="row">
        <div class="col-md-12">
            <form action="add-post-process.php" method="post">
            <div class="form-group">
                <label for="">Mã bài viết</label>
            <?php  echo  '<input type="text" name="id" id="" value="" >' ?>
            </div>
            <div class="form-group">
                <label for=""> Tiêu đề</label>
            <?php  echo  '<input type="text" name="tieude" id="" value="">' ?>
            </div>
            <div class="form-group">
                <label for=""> Tên bài hát</label>
            <?php  echo  '<input type="text" name="ten_bhat" id="" value="">' ?>
            </div>
            <!-- theloai -->
            <div class="form-group">
                <label for=""> Thể loại</label>
            <?php  
                $sql2='select * from theloai;';
                mysqli_set_charset($conn,'UTF8');
                $result2=mysqli_query($conn,$sql2);
                if(mysqli_num_rows($result2)>0){
                    $post_list2=mysqli_fetch_all($result2);
                }
                 echo  '<select id="" name="ma_tloai">';
                
                    foreach($post_list2 as $post2){
                        echo '<option value="'.$post2[0].'">'.$post2[1].'</option>';
                    }
                            
                    echo  '</select>';
                ?>
            </div>
            <div class="form-group">
                <label for=""> Tóm tắt</label>
            <?php  echo  '<input type="text" name="tomtat" id="" value="">' ?>
            </div>
            <!-- Tác giả -->
            <div class="form-group">
                <label for=""> Tác giả</label>
            <?php  echo  '<select id="" name="ma_tgia">';
                $sql3='select * from tacgia;';
                    mysqli_set_charset($conn,'UTF8');
                    $result3=mysqli_query($conn,$sql3);

                    //b3 xuly ketqua
                    if(mysqli_num_rows($result3)>0){
                        $post_list3=mysqli_fetch_all($result3);
                    }
                    foreach($post_list3 as $post3){
                        echo '<option value="'.$post3[0].'">'.$post3[1].'</option>';
                    }
                            
                    echo  '</select>';
                ?>
            </div>
            <div class="form-group">
                <label for=""> Bài viết</label>
            <?php  echo  '<input type="text" name="baiviet" id="" value="">' ?>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
            </form>
            
        </div>
    </div>
</main>