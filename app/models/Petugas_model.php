<?php

class Petugas_model
{
    private $table = 'petugas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function allPetugas()
    {
        return $this->db->query("SELECT * FROM v_petugas")->resultSet();
    }

    public function getDataByID($id)
    {
        return $this->db->query("SELECT * FROM v_petugas WHERE id_petugas = :id_petugas")->bind('id_petugas', $id)->single();
    }

    public function addPetugas($data)
    {
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        try {
            $this->db->beginTransaction();
            $this->db->query("INSERT INTO pengguna VALUES (NULL, :username, :password, 2)")
                ->bind('username', $data['username'])
                ->bind('password', $password)
                ->execute();
            $id_pengguna = $this->db->getLastInsertedId();
            $this->db->query("INSERT INTO petugas VALUES (NULL, :nama, :id_pengguna)")
                ->bind('nama', $data['nama'])
                ->bind('id_pengguna', $id_pengguna)
                ->execute();
            $this->db->commit();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            $this->db->rollback();
            return false;
        }
    }

    public function updatePetugas($data)
    {
        try {
            $this->db->beginTransaction();
            $rowCount = 0;
            $this->db->query("UPDATE pengguna SET username = :username WHERE id_pengguna = :id_pengguna")
                ->bind('username', $data['username'])
                ->bind('id_pengguna', $data['id_pengguna'])
                ->execute();
            $rowCount += $this->db->rowCount();
            $this->db->query("UPDATE petugas SET nama = :nama WHERE id_petugas = :id_petugas")
                ->bind('nama', $data['nama'])
                ->bind('id_petugas', $data['id_petugas'])
                ->execute();
            $this->db->commit();
            $rowCount += $this->db->rowCount();
            return $rowCount;
        } catch (PDOException $e) {
            $this->db->rollback();
            return false;
        }
    }

    public function getPetugasByUsername($username)
    {
        return $this->db->query("SELECT * FROM v_petugas WHERE username = :username")
        ->bind('username', $username)
        ->single();
    }

    public function countPetugas()
    {
        return $this->db->query("SELECT COUNT(*) as count FROM petugas")->single()['count'];
    }
}
