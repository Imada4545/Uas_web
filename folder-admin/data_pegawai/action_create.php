<?php
include_once('../../connection.php');
if (isset($_POST['create'])) {
    // $foto = $_POST['foto_dat'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $foto = $_POST['foto'];
    // $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];

    $ttl = $tempat.", ".date_format(date_create($tanggal),"d - m - Y");        
    $sql = "INSERT INTO pegawai(nip, nama, ttl, jk, foto) VALUES('$nip','$nama','$ttl','$jk','$foto')";

    if ($conn->query($sql) == TRUE) {                
        echo "<script> 
        window.alert('data pegawai berhasil ditambahkan');
        window.location.href = 'index.php';
        </script>";        
    } else {
        echo "Error : " . $sql . "<br> " . $conn->error;
    }
}
