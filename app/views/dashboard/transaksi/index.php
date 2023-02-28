<div class="d-flex">
    <h4 class="mr-auto">Entry Transaksi</h4>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Entry Transaksi</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['siswa'] as $s) : ?>
                                <tr>
                                    <td><?= $s['nisn'] ?></td>
                                    <td><?= $s['nis'] ?></td>
                                    <td><?= $s['nama'] ?></td>
                                    <td><?= $s['nama_kelas'] ?></td>
                                    <td><?= $s['kompetensi_keahlian'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL ?>/dashboard/show/<?= $s['id_siswa'] ?>" class="btn btn-primary">Bayar</a>
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