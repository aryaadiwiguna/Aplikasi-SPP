<div class="d-flex mb-4">
    <h4 class="mr-auto">Daftar Petugas</h4>
    <a href="<?= BASE_URL ?>/dashboard/createPetugas" class="btn btn-success">Tambah Petugas</a>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Petugas</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="alert alert-primary">
                        Berikut Merupakan Daftar Petugas Dalam Sistem
                    </div>
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['petugas'] as $p) : ?>
                                <tr>
                                    <td><?= $p['nama'] ?></td>
                                    <td><?= $p['username'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL ?>/dashboard/editPetugas/<?= $p['id_petugas']  ?>" class="btn btn-warning btn-xs">Edit</a>
                                        <form action="<?= BASE_URL ?>/dashboard/destroyPetugas/<?= $p['id_pengguna'] ?>" class="d-inline" method="POST">
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</button>
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