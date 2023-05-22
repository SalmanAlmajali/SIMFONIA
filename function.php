<?php
    function dd($value) {
        $dump = var_dump($value);
        echo "<pre> $dump </pre>";

        die();
    }

    function urlIs($value) {
        return $_SERVER['REQUEST_URI'] === $value;
    }

    function checkSession()
    {
        session_start();
        
        if(!isset($_SESSION)) {
            header("Location: /");
        }
    }