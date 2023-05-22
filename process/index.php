<?php
    require '../function.php';

    $open = fopen("../data/users.json", "r");
    $data = fread($open, filesize("../data/users.json"));

    $decode = json_decode($data, true);

    echo json_encode($decode);

