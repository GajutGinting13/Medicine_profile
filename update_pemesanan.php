<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nmPerusahaan = $_POST['nmperusahaan'];
$dp = $_POST['dp'];
$alamat = $_POST['alamat'];
$catatan = $_POST['catatan'];
$paket = $_POST['paket'];
$id = $_POST['idpelanggan'];
$sql = mysqli_query($koneksi, "UPDATE pesanan SET  nama = '$nama', nmPerusahaan = '$nmPerusahaan', paket = '$paket', dp = '$dp', catatan = '$catatan', alamat = '$alamat' WHERE id ='$id' ");
if ($sql) {
    $response = [
        'success' => true,
        'message' => "Pesanan Berhasil Diupdate ",
    ];
} else {
    $response = [
        'success' => false,
        'message' => "Gagal Membuat Simpan Data" . mysqli_error($koneksi),
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
