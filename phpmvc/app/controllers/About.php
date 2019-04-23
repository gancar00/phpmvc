<?php

class About {
    public function index($nama = 'AMIN', $pekerjaan = "MAHASISWA")
    {
        echo "sy $nama, kerja $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}