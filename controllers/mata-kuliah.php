<?php
    checkSession();

    $title = "Data Mata Kuliah";

    // Membaca data yang tersedia dari file JSON
    $filename = './data/matkuls.json';
    $matkuls = array();

    if(file_exists($filename)) {
        $matkuls = json_decode(file_get_contents($filename), true);
    }

    require './views/mata-kuliah.php';