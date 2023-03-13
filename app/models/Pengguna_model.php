<?php

class Pengguna_model
{
    private $table = 'pengguna';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function allPengguna()
    {
        $this->db->query("SELECT * FROM {$this->table}");

        return $this->db->resultSet();
    }

    public function getDataByUsername($username)
    {
        return $this->db->query("SELECT * FROM {$this->table} WHERE username = :username")
        ->bind('username', $username)
        ->single();
    }

    public function getByUsernamePassword($username, $password)
    {
        return $this->db->query("SELECT * FROM {$this->table} WHERE username = :username AND password = :password")
            ->bind('username', $username)
            ->bind('password', $password)
            ->single();
    }

    // delete petugas & delete siswa
    public function deletePengguna($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id_pengguna = :id_pengguna")
            ->bind('id_pengguna', $id)
            ->execute();

        return $this->db->rowCount();
    }
}
