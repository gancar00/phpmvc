<?php

class About extends Controller{
    public function index($nama = 'AMIN', $pekerjaan = "MAHASISWA", $hoby="tidur")
    {
        $data['judul'] = 'About Me';
        $data ['nama'] = $nama;
        $data ['pekerjaan'] = $pekerjaan;
        $data ['hoby'] = $hoby;
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer',$data);
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer',$data);
    }
}