<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Tambah Pembayaran</div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/storePembayaran" method="post" class="user">

                    <div class="form-group">
                        <label for="" class="form-label">Tahun Ajaran</label>
                        <input type="text" class="form-control form-control-user" name="tahun_ajaran" placeholder="Masukkan tahun ajaran...">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Nominal</label>
                        <input type="text" class="form-control form-control-user" name="nominal" placeholder="Masukkan nominal...">
                    </div>
                    <button type="submit" class="btn btn-success">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>