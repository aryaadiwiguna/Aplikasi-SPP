<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-l font-weight-bold text-primary text-uppercase mb-1">
                            <?= $data['siswa']['nama'] ?></div>
                        <div class="h6 mb-1 font-weight-bold text-gray-800">Kelas : <?= $data['siswa']['nama_kelas'] ?></div>
                        <div class="h6 mb-1 font-weight-bold text-gray-800">Tahun Ajaran : <?= $data['siswa']['tahun_ajaran'] ?></div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800">Nominal : <?= $data['siswa']['nominal'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL ?>/dashboard/storeTransaksi" class="d-inline" method="POST">
                    <input type="hidden" name="tahun_bayar" value="<?= $data['siswa']['tahun_ajaran'] ?>">
                    <input type="hidden" name="id_siswa" value="<?= $data['siswa']['id_siswa'] ?>">
                    <input type="hidden" name="id_pembayaran" value="<?= $data['siswa']['id_pembayaran'] ?>">
                    <div class="row">
                        <?php foreach ($data['nama_bulan'] as $key => $v) : ?>
                            <div class="col-3 mb-4">
                                <div class="card border-top-primary shadow h-100 position-relative pt-2">
                                    <?php if (array_key_exists($key, $data['bulan_sorted'])) : ?>
                                        <div class="card-body">
                                            <div class="text-xs text-primary text-uppercase font-weight-bold mb-1"><?= $v ?></div>
                                            <div class="h5 text-gray font-weight-bold mb-0"><?= $data['siswa']['nominal'] ?></div>
                                        </div>
                                        <input type="checkbox" width="100%" class="btn-bayar" checked disabled>
                                        <button class="btn-bayar-disabled">Sudah Bayar</button>
                                    <?php else :  ?>
                                        <div class="card-body">
                                            <div class="text-xs text-primary text-uppercase font-weight-bold mb-1"><?= $v ?></div>
                                            <div class="h5 text-gray font-weight-bold mb-0"><?= $data['siswa']['nominal'] ?></div>
                                        </div>
                                        <input type="checkbox" name="bulan_dibayar[]" value="<?= $key ?>" width="100%" class="btn-bayar">
                                        <button class="btn-bayar-asli">Bayar</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach;  ?>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2" onclick="return confirm('Apakah Anda Yakin Melanjutkan Aksi ini?')">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    const checkbox = document.querySelectorAll('.btn-bayar');

    checkbox.forEach((e) => {
        e.addEventListener('click', () => {
            const Nextsib = e.nextElementSibling;
            if (!e.checked) {
                Nextsib.classList.remove('batal-bayar')
                Nextsib.textContent = "Bayar";
            } else {
                Nextsib.classList.add('batal-bayar')
                Nextsib.textContent = "Batal Bayar";
            }
        })
    })
</script>