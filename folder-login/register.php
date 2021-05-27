<?php
include_once('../connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/login.css">
  <link rel="stylesheet" type="text/css" href="../dist/icons/css/all.min.css">
</head>

<body>    
    <div class="container">
        <h3>Register Page</h3>
        <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputLevel" class="form-label">Level</label>
    <select class="form-select" name="level">
        <option value="manager">Manager</option>
        <option value="staff">Staff</option>        
    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="login.php" class="btn btn-success">Login</a>
</form>
    </div>
</body>
<script src="../dist/js/bootstrap.bundle.js"></script>  
</html>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];    
    $level = $_POST['level'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO users(username,password,level) VALUES('$username','$password','$level')";

    if ($conn->query($sql) == TRUE) {
        echo "<script> alert('user created successfully')</script>";
    } else {
        echo "Error : " . $sql . "<br> " . $conn->error;
    }
}
