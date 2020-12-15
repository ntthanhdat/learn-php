<?php include("header.php")
 ?>

      <?php

// quy tinh 4 buoc:
// b1 ket noi database server

$conn=mysqli_connect('localhost','root','','music');

if(!$conn){
    die("kết nối thất bại ".mysqli_connect_error());
}

//buoc 2 khai bao truy van sql
$sql="select * from tacgia";
 mysqli_set_charset($conn,'UTF8');
 $result=mysqli_query($conn,$sql);

 //b3 xuly ketqua
 if(mysqli_num_rows($result)>0){
     $post_list=mysqli_fetch_all($result);
 }
?>
      <main class="container">
          <div class="row">
              <div class="col-md-12">
              


<table class="table">
    <thead>
        <tr>
            <th>Mã tac gia </th>
            <th>tac gia  </th>
            <th>sửa </th>
            <th>xóa </th>
        </tr>
    </thead>
    <tbody>
    <?php
foreach($post_list as $post){
    
        echo '<tr>';
            echo '<td scope="row"> '.$post[0].' </td>';
            echo "<td> $post[1] </td>";
            echo '<td> <a href="editPost.php?id='.$post[0].'"> <i class="far fa-edit"></i></td>';
            echo '<td> <a href="deletePost.php?id='.$post[0].'"> <i class="fas fa-trash-alt"></i></td>';
            
        echo '</tr>';
        
     //dong ket noi
}
?>
    </tbody>
</table>



              </div>
          </div>
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>