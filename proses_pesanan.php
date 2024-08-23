<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nmPerusahaan = $_POST['nmperusahaan'];
$dp = $_POST['dp'];
$alamat = $_POST['alamat'];
$catatan = $_POST['catatan'];
$paket = $_POST['paket'];

$sql = mysqli_query($koneksi, "INSERT INTO pesanan (nama, nmPerusahaan, paket, dp, catatan, alamat)  VALUES ('$nama', '$nmPerusahaan', '$paket', '$dp', '$catatan', '$alamat')");
if ($sql) {
    $response = [
        'success' => true,
        'message' => "Pesanan Berhasil Ditambahkan",
    ];
} else {
    $response = [
        'success' => false,
        'message' => "Gagal Membuat Simpan Data" . mysqli_error($koneksi),
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
