<?php include('header.php'); ?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 require('process-change-password.php'); //#1
 } // End of the main Submit conditional.
 ?>

    <div class="container pt-5">
        <form action="change-password.php" method="post" class="form">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
            </div>
            <div class="form-group">
                <label for="">Current password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="Password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
            </div>
            <div class="form-group">
                <label for="">New password</label>
                <input type="password" name="password1" id="" class="form-control" placeholder="Password" value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
            </div>
            <div class="form-group">
                <label for="">Confirm password</label>
                <input type="password" name="password2" id="" class="form-control" placeholder="Confirm password" value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Change password</button>
        </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>