<?php
$id = $_GET['id'];
$exe = $konek->prepare("DELETE FROM mhs WHERE id=? ");
$exe->bind_param('s', $id);

if ($exe->execute()) {
    echo "<script>alert('Data Berhasil Dihapus');";
    echo "location.replace('index.php?page=mahasiswa');</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus');";
    echo "location.replace('index.php?page=mahasiswa');</script>";
}
?>