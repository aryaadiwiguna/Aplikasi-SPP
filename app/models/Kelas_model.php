<?php

class Kelas_model
{
    private $table = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function allKelas()
    {
        return $this->db->query("SELECT * FROM {$this->table}")->resultSet();
    }

    public function getKelasById($id)
    {
        return $this->db->query("SELECT * FROM {$this->table} WHERE id_kelas = :id")
            ->bind('id', $id)
            ->single();
    }


    public function addKelas($data)
    {
        $this->db->query("CALL insertKelas (:nama, :kompetensi_keahlian)")
            ->bind('nama', $data['nama'])
            ->bind('kompetensi_keahlian', $data['kompetensi_keahlian'])
            ->execute();

        return $this->db->rowCount();
    }

    public function updateKelas($data)
    {
        $this->db->query("UPDATE {$this->table} SET nama = :nama, kompetensi_keahlian = :kompetensi_keahlian WHERE id_kelas = :id_kelas")
            ->bind('nama', $data['nama'])
            ->bind('kompetensi_keahlian', $data['kompetensi_keahlian'])
            ->bind('id_kelas', $data['id_kelas'])
            ->execute();

        return $this->db->rowCount();
    }

    public function deleteKelas($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id_kelas = :id_kelas")
            ->bind('id_kelas', $id)
            ->execute();

        return $this->db->rowCount();
    }
}
