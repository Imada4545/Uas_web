<?php
include_once('../connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data Page</title>
</head>

<body>
    <center>
        <h2>Create new Data</h2>
        <?php if ($_SESSION['role'] == 'admin') : ?>
            <table>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <tr>
                        <td>
                            <label for="foto_dat">Foto</label>
                        </td>
                        <td>
                            <input type="text" name="foto_dat">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="nama_dat">Nama</label>
                        </td>
                        <td>
                            <input type="text" name="nama_dat">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="nik">NIK</label>
                        </td>
                        <td>
                            <input type="text" name="nik">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="ttl">ttl</label>
                        </td>
                        <td>
                            <input type="text" name="ttl">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="alamat">Alamat</label>
                        </td>
                        <td>
                            <input type="text" name="alamat">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="jk_dat">JK</label>
                        </td>
                        <td>
                            <input type="text" name="jk_dat">
                        </td>
                    </tr>

                    <tr>
                        <td><button type="submit" name="create">Create</button></td>
                        <td><a href="index.php">Back to Item list</a></td>
                    </tr>

                </form>
            </table>
    </center>
<?php else : echo '<h2>You cannot access this page!!</h2>';
            echo '<a href="login.php">Back to home</a>';
            exit;
        endif;
?>
</body>

</html>

<?php

if (isset($_POST['create'])) {


    $foto = $_POST['foto_dat'];
    $nama = $_POST['nama_dat'];
    $nik = $_POST['nik'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk_dat'];

    $query = "SELECT * FROM data_pegawai";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $itemName);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $updatedStock = $result['stock'] + $stock;

    $sql = '';
    if ($result) {

    }else{
        $sql = "INSERT INTO data_pegawai(foto,nama,nik,ttl,alamat,jk) VALUES('$itemName','$stock')";
    }    

    if ($conn->query($sql) == TRUE) {
        echo "<script> alert('item created successfully')</script>";
        header('location:index.php');
    } else {
        echo "Error : " . $sql . "<br> " . $conn->error;
    }
}
