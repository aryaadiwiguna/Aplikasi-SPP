<?php


class Dashboard extends Controller
{
    public function __construct()
    {
        if (!$_SESSION['is_logged_in']) {
            redirect('/login');
        }

        if ($_SESSION['role'] != '1') {
            if ($_SESSION['role'] != '2') {
                redirect('/login');
            }
        }
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['siswa'] = $this->model('Kelas_model')->countKelas();
        $data['petugas'] = $this->model('Petugas_model')->countPetugas();
        $data['kelas'] = $this->model('Kelas_model')->countKelas();
        $data['pembayaran'] = $this->model('Pembayaran_model')->countPembayaran();

        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
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
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
        $data['title'] = 'Tambah Petugas';
        $this->view('templates/header', $data);
        $this->view('dashboard/petugas/create');
        $this->view('templates/footer');
    }

    public function storePetugas()
    {
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
        if ($this->model('Siswa_model')->addSiswa($_POST) > 0) {
            Flasher::set('success', 'Data Siswa Berhasil Ditambah');
            redirect('/dashboard/siswa');
        }
    }

    public function editSiswa($id)
    {
        Middleware::setAllowed('1');
        $data = [
            'title' => 'Edit Siswa',
            'siswa' => $this->model('Siswa_model')->getDataByID($id),
            'kelas' => $this->model('Kelas_model')->allKelas(),
            'pembayaran' => $this->model('Pembayaran_model')->allPembayaran()
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/siswa/edit', $data);
        $this->view('templates/footer');
    }

    public function updateSiswa()
    {
        Middleware::setAllowed('1');
        if ($this->model('Siswa_model')->updateSiswa($_POST) > 0 ){
            Flasher::set('success', 'Data Siswa Berhasil Diubah');
            redirect('/dashboard/siswa');
        }
    }

    public function destroySiswa($id)
    {
        Middleware::setAllowed('1');
        if ($this->model('Pengguna_model')->deletePengguna($id) > 0){
            Flasher::set('success', 'Data Siswa Berhasil Dihapus');
            redirect('/dashboard/siswa');
        }
    }

    // END OF FUNCTION SISWA


    // FUNCTION PEMBAYARAN
    public function pembayaran()
    {
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
        $data['title'] = 'Tambah Pembayaran';

        $this->view('templates/header', $data);
        $this->view('dashboard/pembayaran/create');
        $this->view('templates/footer');
    }

    public function storePembayaran()
    {
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
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
        Middleware::setAllowed('1');
        if ($this->model('Pembayaran_model')->updatePembayaran($_POST) > 0) {
            Flasher::set('success', 'Data Pembayaran Berhasil Diubah');
            redirect('/dashboard/pembayaran');
        }
    }

    public function destroyPembayaran($id)
    {
        Middleware::setAllowed('1');
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

        $data['dataBulan'] = [
            'Januari' => [
                'Januari', 1
            ],
            'Februari' => [
                'Februari', 2
            ],
            'Maret' => [
                'Maret', 3
            ],
            'April' => [
                'April', 4
            ],
            'Mei' => [
                'Mei', 5
            ],
            'Juni' => [
                'Juni', 6
            ],
            'Juli' => [
                'Juli', 7
            ],
            'Agustus' => [
                'Agustus', 8
            ],
            'September' => [
                'September', 9
            ],
            'Oktober' => [
                'Oktober', 10
            ],
            'November' => [
                'November', 11
            ],
            'Desember' => [
                'Desember', 12
            ],

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

    public function history()
    {
        $data = [
            'title' => 'History Pembayaran',
            'siswa' => $this->model('Siswa_model')->allSiswa()
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/history/index', $data);
        $this->view('templates/footer');
    }

    public function history_siswa($id)
    {
        $data = [
            'title' => 'History Siswa',
            'transaksi' => $this->model('Transaksi_model')->getTransaksiByIdSiswa($id)
        ];

        $this->view('templates/header', $data);
        $this->view('dashboard/history/show', $data);
        $this->view('templates/footer');
    }
}
