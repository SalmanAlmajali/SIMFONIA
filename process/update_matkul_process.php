<?php
    $id = $_POST['id'];
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];

     // Membaca data yang tersedia dari file JSON
     $filename = '../data/matkuls.json';
     $matkuls = array();

     if(file_exists($filename)) {
        $matkuls = json_decode(file_get_contents($filename), true);
        for($i = 0; $i < count($matkuls); $i++) {
            if($matkuls[$i]['kodeMK'] === $id) {
                $matkuls[$i]['kodeMK'] = $kodeMK;
                $matkuls[$i]['namaMK'] = $namaMK;

                // Menyinpan data baru ke dalam file JSON
                file_put_contents($filename, json_encode($matkuls));

                // Return pesan sukses
                $response = array('success' => true);

                echo json_encode($response);
            }
        }
    }