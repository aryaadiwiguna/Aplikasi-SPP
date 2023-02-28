<?php

class Siswa_model
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function allSiswa()
    {
        return $this->db->query("SELECT * FROM v_siswa")->resultSet();
    }

    public function getDataByID($id)
    {
        return $this->db->query("SELECT * FROM v_siswa WHERE id_siswa = :id_siswa")
            ->bind('id_siswa', $id)
            ->single();
    }

    public function addSiswa($data)
    {

        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        try {
            $this->db->beginTransaction();
            $this->db->query("INSERT INTO pengguna VALUES (NULL, :username, :password, 3)")
                ->bind('username', $data['username'])
                ->bind('password', $password)
                ->execute();
            $id_pengguna = $this->db->getLastInsertedId();
            $this->db->query("INSERT INTO siswa VALUES (NULL, :nisn, :nis, :nama, :alamat, :telepon, :id_kelas, :id_pengguna, :id_pembayaran )")
                ->bind('nisn', $data['nisn'])
                ->bind('nis', $data['nis'])
                ->bind('nama', $data['nama'])
                ->bind('alamat', $data['alamat'])
                ->bind('telepon', $data['telepon'])
                ->bind('id_kelas', $data['id_kelas'])
                ->bind('id_pengguna', $id_pengguna)
                ->bind('id_pembayaran', $data['id_pembayaran'])
                ->execute();
            $this->db->commit();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            die($e->getMessage());
            $this->db->rollback();
            return false;
        }
    }

    public function updateSiswa($data)
    {
        try {
            $this->db->beginTransaction();
            $rowCount = 0;
            $this->db->query("UPDATE pengguna SET username = :username WHERE id_pengguna = :id_pengguna")
                ->bind('username', $data['username'])
                ->bind('id_pengguna', $data['id_pengguna'])
                ->execute();
            $rowCount += $this->db->rowCount();
            $this->db->query("UPDATE siswa SET nisn = :nisn, nis = :nis, nama = :nama, alamat = :alamat, telepon = :telepon, id_kelas = :id_kelas, id_pembayaran = :id_pembayaran WHERE id_siswa = :id_siswa")
                ->bind('nisn', $data['nisn'])
                ->bind('nis', $data['nis'])
                ->bind('nama', $data['nama'])
                ->bind('alamat', $data['alamat'])
                ->bind('telepon', $data['telepon'])
                ->bind('id_kelas', $data['id_kelas'])
                ->bind('id_pembayaran', $data['id_pembayaran'])
                ->execute();
            $this->db->commit();
            $rowCount += $this->db->rowCount();
            return $rowCount;
        } catch (PDOException $e) {
            $this->db->rollback();
            return false;
        }
    }

    public function getSiswaByUsername($username)
    {
        return $this->db->query("SELECT * FROM v_siswa WHERE username = :username")
        ->bind('username', $username)
        ->single();
    }
}
