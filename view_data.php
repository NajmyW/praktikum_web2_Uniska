<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data Mahasiswa</h1>
            <a href="?page=mahasiswaCreate" class="btn btn-primary">Tambah Data</a><br>
            <a href="mahasiswaPrint.php" class="btn btn-success" target="_blank">Cetak Data</a><br>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $exe = $konek->query("SELECT * FROM mhs");
                    while ($data = $exe->fetch_assoc()):
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?= $data['npm'] ?></td>
                            <td><?= $data['nama_lengkap'] ?></td>
                            <td><?= $data['prodi'] ?></td>
                            <td><?= date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td>
                                <a href="?page=mahasiswaEdit&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                                <a href="?page=mahasiswaDelete&id=<?= $data['id'] ?>"
                                    class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>