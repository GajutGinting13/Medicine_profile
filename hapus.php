<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id = '$id'");
if ($sql) {
    header('location: admin.php');
} else {
    echo mysqli_error($koneksi);
}
