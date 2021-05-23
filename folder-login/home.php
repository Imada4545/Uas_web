<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../dist/css/login.css">
    <link rel="stylesheet" type="text/css" href="../dist/icons/css/all.min.css">

</head>

<body>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<h3>Welcome ' . $_SESSION['name'] . ' - ' . ' Anda adalah ' . $_SESSION['role'] . '</h3>';
        if ($_SESSION['role'] == 'admin') {
            echo '<a href="item/index.php" class="btn-green" >Item Menu</a>';
            echo '<a href="purchase/index.php" class="btn-blue" style="margin:20px;">Purchase Menu</a>';
            echo '<a href="up" class="btn-green" >Upload</a>';
        } else if ($_SESSION['role'] == 'user') {
            echo '<a href="sales/index.php" class="btn-green" style="margin-right:20px;">Sales Menu</a>';
        }
    ?>
        <th>
            <a href="auth/logout.php" class="btn-red" onclick="return confirm('Are you sure')"> Logout</a>
        </th>
    <?php
    } else {
        echo '<h2>Tolong login dulu</h2>';
        echo '<a href="auth/login.php" class="btn-blue">Login</a>';
    }
    ?>
</body>

</html>