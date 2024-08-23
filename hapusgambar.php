<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM fitur WHERE id = $id";
$result = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $filePath = $row['urlgambar'];
    // Hapus file gambar dari sistem file server
    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            echo "<script>alert('Gambar berhasil dihapus dari server')</script>";
            $deleteSql = "DELETE FROM fitur WHERE id = $id";
            if (mysqli_query($koneksi, $deleteSql)) {
                echo "<script>alert('Referensi gambar berhasil dihapus dari database.')</script>";
            } else {
                echo "<script>alert('Gagal menghapus referensi gambar dari database)</script>";
            }
        } else {
            echo "<script>alert('Gagal menghapus gambar dari server.')</script>";
        }
    } else {
        echo "<script>alert('File gambar tidak ditemukan.')</script>";
    }
} else {
    echo "<script>alert('Gambar tidak ditemukan di database.')</script>";
}
header('location: setting.php');
