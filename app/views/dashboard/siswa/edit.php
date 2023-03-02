<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Edit Siswa</div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/updateSiswa" method="post" class="user">
                    <input type="hidden" name="id_siswa" value="<?= $data['siswa']['id_siswa'] ?>">
                    <input type="hidden" name="id_pengguna" value="<?= $data['siswa']['id_pengguna'] ?>">
                    <div class="form-group">
                        <label for="" class="form-label">NISN</label>
                        <input type="text" class="form-control form-control-user" name="nisn" value="<?= $data['siswa']['nisn'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">NIS</label>
                        <input type="text" class="form-control form-control-user" name="nis" value="<?= $data['siswa']['nis'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control form-control-user" name="nama" value="<?= $data['siswa']['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-user" name="username" value="<?= $data['siswa']['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" class="form-control form-control-user" name="alamat" value="<?= $data['siswa']['alamat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Telepon</label>
                        <input type="text" class="form-control form-control-user" name="telepon" value="<?= $data['siswa']['telepon'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Kelas</label>
                        <select name="id_kelas" id="" class="form-control">
                            <?php foreach ($data['kelas'] as $k) : ?>
                                <option value="<?= $k['id_kelas'] ?>" <?= ($data['siswa']['id_kelas'] == $k['id_kelas']) ? "selected" : "" ?>><?= $k['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Pembayaran</label>
                        <select name="id_pembayaran" id="" class="form-control">
                            <?php foreach ($data['pembayaran'] as $p) : ?>
                                <option value="<?= $p['id_pembayaran'] ?>" <?= ($data['siswa']['id_pembayaran'] == $p['id_pembayaran']) ? "selected" : "" ?>><?= $p['tahun_ajaran'] ?> / <?= $p['nominal'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>