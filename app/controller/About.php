<?php 

class About extends Controller{
    public function index($nama = 'Rifki',$pekerjaan = 'Mahasiswa',$umur = 20)
    {
        $data['nama']= $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('tamplate/header',$data);
        $this->view('About/index', $data);
        $this->view('tamplate/footer');
    }
    public function page()
    {
        $data['judul']= 'page';
        $this->view('tamplate/header');
        $this->view('about/page');
        $this->view('tamplate/footer');
    }
} 