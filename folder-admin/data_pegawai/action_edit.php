<?php
include('../../connection.php');
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jk = $_POST['jk'];
    $foto = $_POST['foto'];
    $ttl = $tempat . ", " . date_format(date_create($tanggal), "d - m - Y");
    $sql = "UPDATE pegawai  SET ttl='$ttl', jk='$jk', foto = '$foto'  WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        window.alert('data pegawai berhasil diubah');
        window.location.href = 'index.php';
        </script>";    
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
