<div class="d-flex mb-4">
    <h4 class="mr-auto">Daftar Kelas</h4>
    <a href="" class="btn btn-success">Tambah Kelas</a>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Kelas</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="alert alert-primary">
                        Berikut Merupakan Daftar Kelas Dalam Sistem
                    </div>
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>Nama Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data['kelas'] as $k ) : ?>
                        <tr>
                            <td><?= $k['nama'] ?></td>
                            <td><?= $k['kompetensi_keahlian'] ?></td>
                            <td>
                                <a href="<?= BASE_URL ?>/dashboard/editKelas/<?= $k['id_kelas'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                <form action="<?= BASE_URL ?>/dashboard/destroyKelas/<?= $k['id_kelas'] ?>" method="post" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
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