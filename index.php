<?php

// quy tinh 4 buoc:
// b1 ket noi database server

$conn=mysqli_connect('localhost','root','','music');

if(!$conn){
    die("kết nối thất bại ".mysqli_connect_error());
}

//buoc 2 khai bao truy van sql
$sql="select baiviet.ma_bviet, baiviet.tieude, tacgia.ten_tgia, baiviet.ngayviet, baiviet.ten_bhat, theloai.ten_tloai, baiviet.tomtat
from baiviet, tacgia, theloai
 where tacgia.ma_tgia=baiviet.ma_tgia and theloai.ma_tloai=baiviet.ma_tloai";
 mysqli_set_charset($conn,'UTF8');
 $result=mysqli_query($conn,$sql);

 //b3 xuly ketqua
 if(mysqli_num_rows($result)>0){
     $post_list=mysqli_fetch_all($result);
 }

//  echo "<pre>";
//  echo print_r($post_list);
//  echo "</pre>";

//long html trong php;
/*
echo '<div>';
foreach($post_list as $post){
    echo "<div><span>mã bài viết </span><span>$post[0]</span></div>";
    echo "<div><span>tiêu đề </span><span>$post[1]</span></div>";
    echo "<div><span>tên tác giả </span><span>$post[2]</span></div>";
    echo "<div><span>ngày viết </span><span>$post[3]</span></div>";
    echo "<div><span>tên bài hát </span><span>$post[4]</span></div>";
    echo "<div><span>thể loại </span><span>$post[5]</span></div>";
    echo "<div><span>tóm tắt </span><span>$post[6]</span></div>";
    echo '<hr>';
}
echo '</div>';

*/

//long php trong html


//cong localhost cho database la 3306, html la 8080
?>


<div>
    <?php
foreach($post_list as $post){
    ?>
     <div><span>mã bài viết </span><span><?php echo $post[0] ?>  </span></div>
     <div><span>tiêu đề </span><span><?php echo $post[1] ?>  </span></div>
     <div><span>tên tác giả </span><span><?php echo $post[2] ?>  </span></div>
     <div><span>ngày viết </span><span><?php echo $post[3] ?>  </span></div>
     <div><span>tên bài hát </span><span><?php echo $post[4] ?>  </span></div>
     <div><span>thể loại </span><span><?php echo $post[5] ?>  </span></div>
     <div><span>tóm tắt </span><span><?php echo $post[6] ?>  </span></div>
     <hr>
<?php
     
}

//dong ket noi
mysqli_close($conn);
?>
 </div>;
 