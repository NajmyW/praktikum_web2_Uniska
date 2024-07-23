<?php
$exe = $konek->prepare("UPDATE mhs SET npm=?, nama_lengkap=?, prodi=?, tanggal_lahir=?, alamat=? WHERE id=?");
// ========================================== CARA PERTAMA =================================================================
$exe->bind_param(
    'ssssss',
    $npm,
    $nama,
    $prodi,
    $ttl,
    $alamat,
    $id,
);
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];
if ($exe->execute()) {
    echo "<script>alert('Data Berhasil diperbaharui');";
    echo "location.replace('index.php?page=mahasiswa');</script>";
} else {
    echo "<script>alert('Data Gagal diperbaharui');";
    echo "location.replace('index.php?page=mahasiswa');</script>";
}
?>