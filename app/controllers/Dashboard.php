<?php


class Dashboard extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }


    // function kelas
    public function kelas()
    {
        $data = [
            'title' =>  'Kelas',
            'kelas' => $this->model('Kelas_model')->allKelas()
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/kelas/index', $data);
        $this->view('templates/footer');
    }

    public function createKelas()
    {
        $data = [
            'title' => 'Tambah Kelas'
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/kelas/create');
        $this->view('templates/footer');
    }

    public function storeKelas()
    {
        if ($this->model('Kelas_model')->addKelas($_POST) > 0) {
            Flasher::set('success', 'Data Kelas Berhasil Ditambahkan');
            redirect('/dashboard/kelas');
        } else {
            Flasher::set('danger', 'Data Kelas Gagal Ditambahkan');
            redirect('/dashboard/kelas');
        }
    }

    public function editKelas($id)
    {
        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $this->model('Kelas_model')->getKelasById($id)
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/kelas/edit', $data);
        $this->view('templates/footer');
    }

    public function updateKelas()
    {
        if ($this->model('Kelas_model')->updateKelas($_POST) > 0) {
            Flasher::set('success', 'Data Kelas Berhasil Diubah');
            redirect('/dashboard/kelas');
        }
    }

    public function destroyKelas($id)
    {
        if ($this->model('Kelas_model')->deleteKelas($id) > 0) {
            Flasher::set('success', 'Data Kelas Berhasil Dihapus');
            redirect('/dashboard/kelas');
        }
    }
    // AKHIR FUNCTION KELAS

    // FUNCTION PETUGAS
    public function petugas()
    {
        $data = [
            'title' => 'Daftar Petugas',
            'petugas' => $this->model('Petugas_model')->allPetugas()
        ];
        $this->view('templates/header', $data);
        $this->view('dashboard/petugas/index', $data);
        $this->view('templates/footer');
    }


    public function createPetugas()
    {
        $data['title'] = 'Tambah Petugas';
        $this->view('templates/header', $data);
        $this->view('dashboard/petugas/create');
        $this->view('templates/footer');
    }

    public function storePetugas()
    {
        if ($this->model('Petugas_model')->addPetugas($_POST) > 0) {
            Flasher::set('success', 'Data Petugas Berhasil Ditambah');
            redirect('/dashboard/petugas');
        } else {
            Flasher::set('danger', 'Data Petugas Gagal Ditambah');
            redirect('/dashboard/petugas');
        }
    }

    public function editPetugas($id)
    {
        $data = [
            'title' => 'Edit Petugas',
            'petugas' => $this->model('Petugas_model')->getDataByID($id)
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/petugas/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePetugas()
    {
        if ($this->model('Petugas_model')->updatePetugas($_POST) > 0) {
            Flasher::set('success', 'Data Petugas Berhasil Diubah');
            redirect('/dashboard/petugas');
        } else {
            Flasher::set('danger', 'Data Petugas Berhasil Dihapus');
            redirect('/dashboard/petugas');
        }
    }

    public function destroyPetugas($id)
    {
        if ($this->model('Pengguna_model')->deletePengguna($id) > 0) {
            Flasher::set('success', 'Data Petugas Berhasil Dihapus');
            redirect('/dashboard/petugas');
        } else {
            Flasher::set('danger', 'Data Petugas Gagal Dihapus');
            redirect('/dashboard/petugas');
        }
    }

    // AKHIR FUNCTION PETUGAS

    // FUNCTION SISWA
    public function siswa()
    {
        $data = [
            'title' => 'Daftar Siswa',
            'siswa' => $this->model('Siswa_model')->allSiswa()
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/siswa/index', $data);
        $this->view('templates/footer');
    }

    public function createSiswa()
    {
        $data = [
            'title' => 'Tambah Siswa',
            'kelas' => $this->model('Kelas_model')->allKelas(),
            'pembayaran' => $this->model('Pembayaran_model')->allPembayaran()
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/siswa/create', $data);
        $this->view('templates/footer');
    }

    public function storeSiswa()
    {
        if ($this->model('Siswa_model')->addSiswa($_POST) > 0) {
            Flasher::set('success', 'Data Siswa Berhasil Ditambah');
            redirect('/dashboard/siswa');
        }
    }


    // FUNCTION PEMBAYARAN
    public function pembayaran()
    {
        $data = [
            'title' => 'Data Pembayaran',
            'pembayaran' => $this->model('Pembayaran_model')->allPembayaran()
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/pembayaran/index', $data);
        $this->view('templates/footer');
    }

    public function createPembayaran()
    {
        $data['title'] = 'Tambah Pembayaran';

        $this->view('templates/header', $data);
        $this->view('dashboard/pembayaran/create');
        $this->view('templates/footer');
    }

    public function storePembayaran()
    {
        if ($this->model('Pembayaran_model')->addPembayaran($_POST) > 0) {
            Flasher::set('success', 'Data Pembayaran Berhasil Ditambahkan');
            redirect('/dashboard/pembayaran');
        } else {
            Flasher::set('danger', 'Data Pembayaran Gagal Ditambahkan');
            redirect('/dashboard/pembayaran');
        }
    }

    public function editPembayaran($id)
    {
        $data = [
            'title' => 'Edit Pembayaran',
            'pembayaran' => $this->model('Pembayaran_model')->getDataByID($id)
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/pembayaran/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePembayaran()
    {
        if ($this->model('Pembayaran_model')->updatePembayaran($_POST) > 0) {
            Flasher::set('success', 'Data Pembayaran Berhasil Diubah');
            redirect('/dashboard/pembayaran');
        }
    }

    public function destroyPembayaran($id)
    {
        if ($this->model('Pembayaran_model')->deletePembayaran($id) > 0) {
            Flasher::set('success', 'Data Pembayaran Berhasil Dihapus');
            redirect('/dashboard/pembayaran');
        }
    }

    // AKHIR FUNCTION PEMBAYARAN

    // FUNCTION TRANSAKSI
    public function transaksi()
    {
        $data = [
            'title' => 'Transaksi',
            'siswa' => $this->model('Siswa_model')->allSiswa()
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/transaksi/index', $data);
        $this->view('templates/footer');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Transaksi Siswa',
            'siswa' => $this->model('Siswa_model')->getDataByID($id),
            'bulan' => $this->model('Transaksi_model')->getBulanByIdTransaksiSiswa($id)
        ];

        $bulan_dibayar = [];

        foreach ($data['bulan'] as $bulan) {
            array_push($bulan_dibayar, $bulan['bulan_dibayar']);
        }

        $data['bulan_dibayar'] = $bulan_dibayar;

        $this->view('templates/header', $data);
        $this->view('dashboard/transaksi/show', $data);
        $this->view('templates/header');
    }

    public function storeTransaksi()
    {
        if ($this->model('Transaksi_model')->addTransaksi($_POST) > 0) {
            Flasher::set('success', 'Data Transaksi Berhasil Ditambah');
            redirect('/dashboard/transaksi');
        }
    }
}
