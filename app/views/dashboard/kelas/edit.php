<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Edit Kelas</div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/updateKelas" class="user" method="POST">
                    <input type="hidden" name="id_kelas" value="<?= $data['kelas']['id_kelas'] ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukkan Nama Kelas..." value="<?= $data['kelas']['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="kompetensi_keahlian" placeholder="Masukkan Kompetensi Keahlian..." value="<?= $data['kelas']['kompetensi_keahlian'] ?>">
                    </div>
                    <button type="submit" class="btn btn-success float-right">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>