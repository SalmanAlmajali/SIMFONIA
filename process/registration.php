<?php
    $open = fopen("../data/users.json", "r");
    $data = fread($open, filesize("../data/users.json"));

    $decode = json_decode($data, true);
    $length = count($decode);

    
    $arrData = array($_POST['nim'], $_POST['name'], $_POST['email'], $_POST['password']);
    
    $decode[] = $arrData;
    
    $write = fopen("../data/users.json", "w");
    fwrite($write, json_encode($decode));

    $successResponse = 'Terima kasih!, data anda telah berhasil dikirim!';

    $errorMessage = 'Error';
    
    if(count($decode) !== $length) {
        echo $successResponse;
    } else {
        echo $errorMessage;
    }