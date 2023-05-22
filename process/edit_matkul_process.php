<?php
    $kodeMK = $_GET['kodeMK'];

    // Membaca data yang tersedia dari file JSON
    $filename = '../data/matkuls.json';
    $matkuls = array();

    if(file_exists($filename)) {
        $matkuls = json_decode(file_get_contents($filename), true);
        for($i = 0; $i < count($matkuls); $i++) {
            if($matkuls[$i]['kodeMK'] === $kodeMK) {
                $matkul = array(
                    'data' => $matkuls[$i]
                );

                echo json_encode($matkul);
            }
        }
    }