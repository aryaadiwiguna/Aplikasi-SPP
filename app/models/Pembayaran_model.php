<?php

class Pembayaran_model
{
    private $table = 'pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function allPembayaran()
    {
        return $this->db->query("SELECT * FROM {$this->table}")->resultSet();
    }

    public function getDataByID($id)
    {
        return $this->db->query("SELECT * FROM {$this->table} WHERE id_pembayaran = :id_pembayaran")
            ->bind('id_pembayaran', $id)
            ->single();
    }

    public function addPembayaran($data)
    {
        $this->db->query("INSERT INTO {$this->table} VALUES (NULL, :tahun_ajaran, :nominal)")
            ->bind('tahun_ajaran', $data['tahun_ajaran'])
            ->bind('nominal', $data['nominal'])
            ->execute();
        return $this->db->rowCount();
    }

    public function updatePembayaran($data)
    {
        $this->db->query("UPDATE {$this->table} SET tahun_ajaran = :tahun_ajaran, nominal = :nominal WHERE id_pembayaran = :id_pembayaran")
        ->bind('tahun_ajaran', $data['tahun_ajaran'])
        ->bind('nominal', $data['nominal'])
        ->bind('id_pembayaran', $data['id_pembayaran'])
        ->execute();

        return $this->db->rowCount();
    }

    public function deletePembayaran($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id_pembayaran = :id_pembayaran")
        ->bind('id_pembayaran', $id)
        ->execute();

        return $this->db->rowCount();
    }
}
