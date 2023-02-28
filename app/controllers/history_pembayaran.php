<?php

class history_pembayaran extends Controller
{
    public function index()
    {

    }

    public function history()
    {
        $id = $_SESSION['id_siswa'];

        $data['history'] = $this->model('Transaksi_model')->getTransaksiByIdSiswa($id);
        $data['title'] = 'History Siswa';

        $this->view('templates/header', $data);
        $this->view('siswa/history', $data);
        $this->view('templates/footer');
    }
}