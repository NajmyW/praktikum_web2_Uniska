<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tambah Data Mahasiswa</h1>
            <div class="mb-3">
                <form action="?page=createMahasiswa" method="POST">
                    <label for="" class="form-label">NPM</label>
                    <input type="text" class="form-control" name="npm">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Prodi</label>
                <input type="text" class="form-control" name="prodi">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="ttl">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Batal</button>
        </div>
        </form>
    </div>
</div>
</div>