<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Tambah Siswa</div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/storeSiswa" method="post" class="user">
                    <div class="form-group">
                        <label for="" class="form-label">NISN</label>
                        <input type="text" class="form-control form-control-user" name="nisn">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">NIS</label>
                        <input type="text" class="form-control form-control-user" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control form-control-user" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-user" name="username">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-user" name="password">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" class="form-control form-control-user" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Telepon</label>
                        <input type="text" class="form-control form-control-user" name="telepon">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Kelas</label>
                        <select name="id_kelas" id="" class="form-control">
                            <?php foreach ($data['kelas'] as $k) : ?>
                                <option value="<?= $k['id_kelas'] ?>"><?= $k['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Pembayaran</label>
                        <select name="id_pembayaran" id="" class="form-control">
                            <?php foreach ($data['pembayaran'] as $p) : ?>
                                <option value="<?= $p['id_pembayaran'] ?>"><?= $p['tahun_ajaran'] ?> / <?= $p['nominal'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>