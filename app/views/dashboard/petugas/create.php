<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Tambah Petugas</div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/storePetugas" class="user" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukkan Nama...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username...">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password...">
                    </div>
                    <button type="submit" class="btn btn-success">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>