<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Tambah Kelas</div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/storeKelas" class="user" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukkan Nama Kelas...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="kompetensi_keahlian" placeholder="Masukkan Kompetensi Keahlian...">
                    </div>
                    <button type="submit" class="btn btn-success float-right">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

