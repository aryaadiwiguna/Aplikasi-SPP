<?php

class Transaksi_model
{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function allTransaksi()
    {
        return $this->db->query("SELECT * FROM v_transaksi")->resultSet();
    }

    public function addTransaksi($data)
    {

        $tahun_ajaran = explode('/', $data['tahun_bayar']);  

        foreach ($data['bulan_dibayar'] as $dt) {
            if ($dt >= 7 && $dt <= 12) {
                $tahun_bayar = $tahun_ajaran[0];
            } else {
                $tahun_bayar = $tahun_ajaran[1];
            }

           $this->db->query("INSERT INTO transaksi VALUES (NULL, NOW(), :bulan, :tahun, :id_siswa, :id_petugas, :id_pembayaran)")
           ->bind('bulan', $dt)
           ->bind('tahun', $tahun_bayar)
           ->bind('id_siswa', $data['id_siswa'])
           ->bind('id_petugas', $_SESSION['id_petugas'])
           ->bind('id_pembayaran', $data['id_pembayaran'])
           ->execute();
        }

        return $this->db->rowCount();
    }

    public function getBulanByIdTransaksiSiswa($id)
    {
        return $this->db->query("SELECT bulan_dibayar FROM transaksi WHERE id_siswa = :id_siswa")
        ->bind('id_siswa', $id)
        ->resultSet();
    }

    public function getTransaksiByIdSiswa($id)
    {
        return $this->db->query("SELECT * FROM v_transaksi WHERE id_siswa = :id_siswa")
        ->bind('id_siswa', $id)
        ->resultSet();
    }


}
