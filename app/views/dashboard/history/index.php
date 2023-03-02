<div class="d-flex mb-4">
    <h4 class="mr-auto">History Pembayaran Siswa</h4>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">History Pembayaran</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['siswa'] as $s) : ?>
                                <tr>
                                    <td><?= $s['nisn'] ?></td>
                                    <td><?= $s['nis'] ?></td>
                                    <td><?= $s['nama'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL ?>/dashboard/history_siswa/<?= $s['id_siswa'] ?>" class="btn btn-primary btn-xs">Lihat</a>
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