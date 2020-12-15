<!doctype html>
<html lang="en">
  <head>
    <title>b4-na</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
  <body>
    s
      <?php

// quy tinh 4 buoc:
// b1 ket noi database server

$conn=mysqli_connect('localhost','root','','music');

if(!$conn){
    die("kết nối thất bại ".mysqli_connect_error());
}
$id=$_GET['id'];



//buoc 2 khai bao truy van sql
$sql="select * from baiviet where id='$id'";
 mysqli_set_charset($conn,'UTF8');
 $result=mysqli_query($conn,$sql);

 //b3 xuly ketqua
 if(mysqli_num_rows($result)>0){
     $post_list=mysqli_fetch_row($result);
 }
?>
      <main class="container">
          <div class="row">
              <div class="col-md-12">
              


<table class="table">
    <thead>
        <tr>
            <th>Mã bài viết</th>
            <th>tieu de</th>
            <th>tenbaihat</th>
            <th>tac gia  </th>
            <th>the loai </th>
        </tr>
    </thead>
    <tbody>
    <?php
foreach($post_list as $post){
    
        echo '<tr>';
            echo '<td scope="row"> '.$post[0].' </td>';
            echo "<td> $post[1] </td>";
            echo "<td> $post[4] </td>";
            echo "<td> $post[2] </td>";
            echo "<td> $post[5] </td>";
            
        echo '</tr>';
        
     //dong ket noi
}
?>
    </tbody>
</table>
<button><a href="edit.php"></a></button>



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