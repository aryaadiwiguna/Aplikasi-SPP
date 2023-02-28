<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Edit Petugas</div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/updatePetugas" class="user" method="POST">
                    <input type="hidden" name="id_petugas" value="<?= $data['petugas']['id_petugas'] ?>">
                    <input type="hidden" name="id_pengguna" value="<?= $data['petugas']['id_pengguna'] ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukkan Nama..." value="<?= $data['petugas']['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username..." value="<?= $data['petugas']['username'] ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>