<?php
include 'koneksi.php';

if(isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $sql = "DELETE FROM siswa WHERE nis='$nis'";
    
    if(mysqli_query($koneksi, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>