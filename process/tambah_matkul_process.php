<?php
    // Get from data
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];

    $data = array(
        'kodeMK' => $kodeMK,
        'namaMK' => $namaMK
    );

    // Membaca data yang tersedia dari file JSON
    $filename = '../data/matkuls.json';
    $matkuls = array();

    if(file_exists($filename)) {
        $matkuls = json_decode(file_get_contents($filename), true);
    }

    // Menambahkan data yang diinput kedalam fileJSON
    $matkuls[] = $data;

    // Menyinpan data baru ke dalam file JSON
    file_put_contents($filename, json_encode($matkuls));

    // Return pesan sukses
    $response = array('success' => true);

    echo json_encode($response);