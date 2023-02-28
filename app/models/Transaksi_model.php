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
        $rawData = $data;

        unset($data['id_siswa']);
        unset($data['id_pembayaran']);
        
        $year = date('Y');

        foreach ($data['bulan_dibayar'] as $d) {
            $this->db->query("INSERT INTO {$this->table} VALUES (NULL, NOW(), :bulan_dibayar, :tahun_dibayar, :id_siswa, :id_petugas, :id_pembayaran)")
                ->bind('bulan_dibayar', $d)
                ->bind('tahun_dibayar', "$year")
                ->bind('id_siswa', $rawData['id_siswa'])
                ->bind('id_petugas', $_SESSION['id_petugas'])
                ->bind('id_pembayaran', $rawData['id_pembayaran'])
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
