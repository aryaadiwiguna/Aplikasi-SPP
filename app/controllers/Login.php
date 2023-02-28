<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('auth/login');
    }

    public function redirect()
    {
        $dataUser = null;

        if (!$dataUser = $this->model('Siswa_model')->getSiswaByUsername($_POST['username'])) {
            if (!$dataUser = $this->model('Petugas_model')->getPetugasByUsername($_POST['username'])) {
                Flasher::set('danger', 'Akun Tidak Ada');
                redirect('/login');
                die;
            }
        }

        if (!password_verify($_POST['password'], $dataUser['password'])) {
            Flasher::set('danger', 'Password Yang Anda Masukkan Tidak Sesuai');
            redirect('/login');
            die;
        }

        $_SESSION['username'] = $dataUser['username'];
        $_SESSION['is_logged_in'] = true;

        if ($dataUser['role'] == 1) {
            $_SESSION['role'] = 1;
            $_SESSION['id_petugas'] = $dataUser['id_petugas'];
            redirect('/dashboard');
        } else if ($dataUser['role'] == 2) {
            $_SESSION['role'] = 2;
            $_SESSION['id_petugas'] = $dataUser['id_petugas'];
            redirect('/dashboard/transaksi');
        } else {
            $_SESSION['role'] = 3;
            $_SESSION['id_siswa'] = $dataUser['id_siswa'];
            redirect('/siswa');
        }
    }
}
