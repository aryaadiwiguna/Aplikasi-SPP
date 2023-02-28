<?php

class generate_laporan extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Cetak Laporan',
            'transaksi' => $this->model('Transaksi_model')->allTransaksi(),
        ];

        $data['bulan'] = [1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'];

        $data['pilihanData'] = [];

        foreach ($data['transaksi'] as $t) {
            $data['pilihanData'][$t['nama'] . '|' . $t['nisn']][] = $t['bulan_dibayar'];
        }

        $this->view('laporan/index', $data);
    }
}
