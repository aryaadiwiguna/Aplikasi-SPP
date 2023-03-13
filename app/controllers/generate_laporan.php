<?php

class generate_laporan extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Cetak Laporan',
            'transaksi' => $this->model('Transaksi_model')->allTransaksi(),
        ];

        $data['bulan'] = NAMA_BULAN;

        $data['pilihanData'] = [];

        foreach ($data['transaksi'] as $t) {
            $data['pilihanData'][$t['nama'] . '|' . $t['nisn']][] = $t['bulan_dibayar'];
        }

        $this->view('laporan/index', $data);
    }
}
