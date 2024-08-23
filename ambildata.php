<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id = '$id'");
$data = mysqli_fetch_array($sql);
$response = [
    'id' => $data['id'],
    'nama' => $data['nama'],
    'nmPerusahaan' => $data['nmPerusahaan'],
    'paket' => $data['paket'],
    'dp' => $data['dp'],
    'catatan' => $data['catatan'],
    'alamat' => $data['alamat'],
];
header('Content-Type: application/json');
echo json_encode($response);
