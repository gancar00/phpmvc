<?php

class About extends Controller{
    public function index($nama = 'AMIN', $pekerjaan = "MAHASISWA", $hoby="tidur")
    {
        $data ['nama'] = $nama;
        $data ['pekerjaan'] = $pekerjaan;
        $data ['hoby'] = $hoby;
        $this->view('about/index',$data);
    }
    public function page()
    {
        $this->view('about/page');
    }
}