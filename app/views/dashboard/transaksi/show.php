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
        <form action="<?= BASE_URL ?>/dashboard/storeTransaksi" class="d-inline" method="POST">
            <input type="hidden" name="id_siswa" value="<?= $data['siswa']['id_siswa'] ?>">
            <input type="hidden" name="id_pembayaran" value="<?= $data['siswa']['id_pembayaran'] ?>">
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="1" <?= in_array(1, $data['bulan_dibayar']) ? "checked disabled" : "" ?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Januari" disabled >
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="2" <?= in_array(2, $data['bulan_dibayar']) ? "checked disabled" : "" ?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Februari" disabled>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="3" <?= in_array(3, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Maret" disabled >
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="4" <?= in_array(4, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="April" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="5" <?= in_array(5, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Mei" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="6" <?= in_array(6, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Juni" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="7" <?= in_array(7, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Juli" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="8" <?= in_array(8, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Agustus" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="9" <?= in_array(9, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="September" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="10" <?= in_array(10, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Oktober" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="11" <?= in_array(11, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="November" disabled>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="bulan_dibayar[]" id="" value="12" <?= in_array(11, $data['bulan_dibayar']) ? "checked disabled" : ""?>>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Desember" disabled>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

</div>