<?php

include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input 'Deskripsi'
    if (empty($_POST['Deskripsi'])) {
        $response = [
            'success' => false,
            'message' => 'Deskripsi is required.'
        ];
    } elseif (!is_string($_POST['Deskripsi']) || strlen($_POST['Deskripsi']) > 255) {
        $response = [
            'success' => false,
            'message' => 'Deskripsi must be a string with a maximum length of 255 characters.'
        ];
    } else {
        // Proses file gambar yang diunggah jika ada
        if (!empty($_FILES['logo_url']['name'])) {
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            $maxFileSize = 2048 * 1024; // 2MB
            $fileType = mime_content_type($_FILES['logo_url']['tmp_name']);
            $fileSize = $_FILES['logo_url']['size'];

            if (!in_array($fileType, $allowedMimeTypes)) {
                $response = [
                    'success' => false,
                    'message' => 'The logo must be an image (jpeg, png, jpg, gif).'
                ];
            } elseif ($fileSize > $maxFileSize) {
                $response = [
                    'success' => false,
                    'message' => 'The logo may not be greater than 2048 KB.'
                ];
            } else {
                // Jika tidak ada masalah dengan file, coba unggah
                $targetDir = 'assets/images/landing/mitra/';
                $targetFile = $targetDir . basename($_FILES['logo_url']['name']);

                if (move_uploaded_file($_FILES['logo_url']['tmp_name'], $targetFile)) {
                    $logo_url = mysqli_real_escape_string($koneksi, $targetFile);
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Failed to upload the logo.'
                    ];
                }
            }
        }

        // Jika tidak ada kesalahan dan validasi berhasil, simpan ke database
        if (!isset($response)) {
            $Deskripsi = mysqli_real_escape_string($koneksi, $_POST['Deskripsi']);
            $query = "INSERT INTO mitra (nama, gambar) VALUES ('$Deskripsi', '$logo_url')";

            if (mysqli_query($koneksi, $query)) {
                $response = [
                    'success' => true,
                    'message' => "Berhasil Simpan Data"
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => "Gagal menyimpan data ke database: " . mysqli_error($koneksi)
                ];
            }
        }
    }
} else {
    $response = [
        'success' => false,
        'message' => "Request method not allowed."
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
