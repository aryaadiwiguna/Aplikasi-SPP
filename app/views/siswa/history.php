<div class="d-flex">
    <h4 class="mr-auto mb-4">History Pembayaran <b><?= $_SESSION['username'] ?></b></h4>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mt-2">
            <div class="card-header">History Pembayaran</div>
            <div class="card-body">
                <div class="table-responsive">
                   <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal Bayar</th>
                                <th>Bulan Bayar</th>
                                <th>Tahun Bayar</th>
                                <th>Tahun Ajaran</th>
                                <th>Nominal</th>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['history'] as $h) : ?>
                                <tr>
                                    <td><?= $h['tanggal_bayar'] ?></td>
                                    <td><?= bulan($h['bulan_dibayar']) ?></td>
                                    <td><?= $h['tahun_dibayar'] ?></td>
                                    <td><?= $h['tahun_ajaran'] ?></td>
                                    <td><?= $h['nominal'] ?></td>
                                    <td><span class="badge badge-success">Lunas</span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                   </table> 
                </div>
            </div>
        </div>
    </div>
</div>