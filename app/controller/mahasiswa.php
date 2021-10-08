<?php 

class mahasiswa extends Controller{

    public function index()
    {
    $data['judul'] = ' Data mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('tamplate/header',$data);
    $this->view('mahasiswa/index',$data);
    $this->view('tamplate/footer');
}
}