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
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">QL bai viet <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="tacgia.php">ql tac gia</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="theloai.php">ql the loai</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>

      <?php

// quy tinh 4 buoc:
// b1 ket noi database server

$conn=mysqli_connect('localhost','root','','music');

if(!$conn){
    die("kết nối thất bại ".mysqli_connect_error());
}

//buoc 2 khai bao truy van sql
$sql="select * from theloai";
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
            <th>Mã the loai</th>
            <th>the loai </th>
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
            echo '<td> <a href="edittopic.php?id='.$post[0].'"> <i class="far fa-edit"></i></td>';
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