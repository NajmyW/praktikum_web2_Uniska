<?php
$id = $_GET['id'];
$exe = $konek->prepare("SELECT * FROM mhs WHERE id=?");
$exe->bind_param('s', $id);
$exe->execute();
$result = $exe->get_result();
$data = $result->fetch_array();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ubah Data Mahasiswa</h1>
            <form action="?page=ubahMahasiswa" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="mb-3">
                    <form action="?page=createMahasiswa" method="POST">
                        <label for="" class="form-label">NPM</label>
                        <input type="text" class="form-control" name="npm" value="<?= $data[1] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data[2] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Prodi</label>
                    <input type="text" class="form-control" name="prodi" value="<?= $data[3] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="ttl" value="<?= $data[4] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $data[5] ?>">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
        </div>
        </form>
    </div>
</div>
</div>