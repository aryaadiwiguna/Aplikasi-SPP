<?php 

class Kelas extends Controller
{
    public function index()
    {
        $data['kelas'] = $this->model('Kelas_model')->allKelas();

        $this->view('templates/header');
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        
    }
}