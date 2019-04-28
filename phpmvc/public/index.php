<?php

if(!session_id()) session_start();


//teknik bootstraping(memanggil satu file && file itu memanggil seluruh file app)
require_once '../app/init.php'; 

$app = new App;