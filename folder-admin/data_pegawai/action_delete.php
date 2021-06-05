<?php
include('../../connection.php');
$id = $_GET['id'];        // Collecting data from query string
if(!is_numeric($id)) echo "Data Error"; // Checking data it is a number or not

$sql = "DELETE FROM pegawai WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script> 
    window.alert('data pegawai berhasil dihapus');
    window.location.href = 'index.php';
    </script>";    
} else {
  echo "Error deleting record: " . $conn->error;
}