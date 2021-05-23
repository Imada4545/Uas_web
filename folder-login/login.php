<?php
// include_once('connection.php');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/login.css">
  <link rel="stylesheet" type="text/css" href="../dist/icons/css/all.min.css">


  <title>Hello, world!</title>
</head>

<body>

  <div class="container">
    <h4 class="text-center">PT. INDONESIA</h4>
    <hr>

    <form>
      <div class="form-group">
        <label>Username</label>
        <div class="input-group">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" name="" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label>Password</label>
        <div class="input-group">
          <div class="input-group-text">
            <i class="fa fa-key"></i>
          </div>
          <input type="password" name="" class="form-control">
        </div>
      </div>
      <br>      
      <select name="level" id="level" class="form-select">
        <option value="" selected>-- Select Access Level --</option>
        <option value="admin">Admin</option>
        <option value="karyawan">Karyawan</option>
      </select>
      <br>
      <button type="login" class="btn btn-success">Login</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </form>
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="../dist/js/bootstrap.bundle.js"></script>  

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>


</html>
<?php

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  //to prevent from mysqli injection  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);

  $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

  $query = $conn->query($sql);
  if (mysqli_num_rows($query) == 1) {
    $data = $query->fetch_array();
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['name'] = $data['name'];
    $_SESSION['role'] = $data['role'];
    header('Location:dashboard.php');
  } else {
    echo "<script>alert('Password atau Username salah')</script>";
  }
}
?>