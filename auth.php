<?php
include 'koneksi.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE `email` = '$email' AND `password` = '$password'");
$validasi = mysqli_num_rows($sql);
if ($validasi > 0) {
    $response = [
        'success' => true,
        'message' => "Selamat Datang Admin",
    ];
    $data = mysqli_fetch_array($sql);
    $nama = $_SESSION['nama'] = $data['nama'];
} else {
    $response = [
        'success' => false,
        'message' => "Email Atau Sandi Anda Salah",
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
