<div class="d-flex">
    <h4 class="mr-auto">Daftar Siswa</h4>
    <a href="<?= BASE_URL ?>/dashboard/createSiswa" class="btn btn-success">Tambah Siswa</a>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Daftar Siswa</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="alert alert-primary">Berikut Merupakan Daftar Siswa Dalam Sistem</div>
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Tahun Ajaran</th>
                                <th>Nominal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['siswa'] as $s ) : ?>
                                <tr>
                                    <td><?= $s['nisn'] ?></td>
                                    <td><?= $s['nis'] ?></td>
                                    <td><?= $s['nama'] ?></td>
                                    <td><?= $s['nama_kelas'] ?></td>
                                    <td><?= $s['kompetensi_keahlian'] ?></td>
                                    <td><?= $s['tahun_ajaran'] ?></td>
                                    <td><?= $s['nominal'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL ?>/<?= $s['id_siswa'] ?>" class="btn btn-warning">Edit</a>
                                        <form action="<?= BASE_URL ?>/dashboard/destroySiswa/<?= $s['id_siswa'] ?>" class="d-inline" method="post">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>