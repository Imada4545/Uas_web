<?php
include_once('../connection.php');
session_start();

$sql = "SELECT * FROM data_pegawai";

if ($conn->query($sql)) {
    $data_pegawai = $conn->query($sql);
} else {
    echo ("Error description: " . $conn->error);
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if ($_SESSION['role'] == 'admin') :
    ?>
        <center>
        <a href="login.php" class="btn-red" style="position: absolute; top: 10px; right: 10px;">Logout</a>
            <h2>Item Index</h2>
            <a href="dashbord.php" class="btn-green" style="margin-bottom: 10px; float: left;">Back to Home</a>
            <a href="create.php" class="btn-blue" style="margin-bottom: 10px; float: right;">Create Item</a>
            <table>
                <thead>
                    <tr>
                        <th>no</th>
                        <th>foto</th>
                        <th>nama</th>
                        <th>nik</th>
                        <th>ttl</th>
                        <th>alamat</th>
                        <th>jk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($data_pegawai) > 0) {
                        while ($data = mysqli_fetch_array($data_pegawai)) {
                    ?>
                        <tr>
                            <td><?php echo $data['no'] ?></td>
                            <td><?php echo $data['foto'] ?></td>
                            <td><?php echo $data['nama'] ?></td> 
                            <td><?php echo $data['nik'] ?></td>
                            <td><?php echo $data['ttl'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['jk'] ?></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </center>
    <?php
    else :
        echo '<h2>You cannot access this page!!</h2>';
        echo '<a href="../home.php">Back to home</a>';
        exit;
    endif
    ?>
</body>

</html> 