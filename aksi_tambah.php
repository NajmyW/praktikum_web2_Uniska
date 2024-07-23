<?php
$exe = $konek->prepare("INSERT INTO mhs (npm, nama_lengkap, prodi, tanggal_lahir, alamat) VALUES (?, ?, ?, ?, ?)");
// ========================================== CARA PERTAMA =================================================================
$exe->bind_param(
    'sssss',
    $npm,
    $nama,
    $prodi,
    $ttl,
    $alamat,
);
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];

if ($exe->execute() == true) {
    echo "<script>alert('Data Berhasil ditambahkan');";
    echo "location.replace('index.php?page=mahasiswa');</script>";
} else {
    echo "<script>alert('Data Gagal ditambahkan');";
    echo "location.replace('index.php?page=mahasiswa');</script>";
}
?>