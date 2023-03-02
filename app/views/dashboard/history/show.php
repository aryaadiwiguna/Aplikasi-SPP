<div class="d-flex">
    <h4 class="mr-auto">History Pembayaran <b><?= $data['transaksi'][0]['nama'] ?></b></h4>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mt-2">
          <div class="card-header">History Pembayaran</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>Tanggal Bayar</th>
                                <th>Tahun Dibayar</th>
                                <th>Bulan Dibayar</th>
                                <th>Tahun Ajaran</th>
                                <th>Nominal</th>
                                <th>Status</th>
                            </tr>
                        </thead>    
                        <tbody>
                               <?php foreach($data['transaksi'] as $ts) : ?>
                                    <tr>
                                        <td><?= $ts['tanggal_bayar'] ?></td>
                                        <td><?= $ts['tahun_dibayar'] ?></td>
                                        <td><?= bulan($ts['bulan_dibayar']) ?></td>
                                        <td><?= $ts['tahun_ajaran'] ?></td>
                                        <td><?= $ts['nominal'] ?></td>
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