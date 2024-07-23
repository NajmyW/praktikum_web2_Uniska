<?php
include "koneksi.php"; //Memanggil file koneksi
include "header.php";//memasukan file headers
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'mahasiswa':
            include 'view_data.php';
            break;
        case 'createMahasiswa':
            include "aksi_tambah.php";
            break;
        case 'mahasiswaCreate':
            include 'tambah.php';
            break;
        case 'mahasiswaEdit':
            include "edit.php";
            break;
        case 'ubahMahasiswa':
            include 'aksi_ubah.php';
            break;
        case 'mahasiswaDelete':
            include "hapus.php";
            break;
    }
}
