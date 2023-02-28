<div class="d-flex">
    <h4 class="mr-auto">Daftar Pembayaran</h4>
    <a href="" class="btn btn-success">Tambah Pembayaran</a>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Daftar Pembayaran</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="alert alert-primary">Berikut Merupakan Daftar Pembayaran Dalam Sistem</div>
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>Tahun Ajaran</th>
                                <th>Nominal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['pembayaran'] as $pb) : ?>
                                <tr>
                                    <td><?= $pb['tahun_ajaran'] ?></td>
                                    <td><?= $pb['nominal'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL ?>/dashboard/editPembayaran/<?= $pb['id_pembayaran'] ?>" class="btn btn-warning">Edit</a>
                                        <form action="<?= BASE_URL ?>/dashboard/destroyPembayaran/<?= $pb['id_pembayaran'] ?>" method="post" class="d-inline">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini')">Hapus</button>
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