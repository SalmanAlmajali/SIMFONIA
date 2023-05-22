<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes = [
        '/' => 'controllers/index.php',
        '/admin' => 'controllers/admin.php',
        '/dashboard' => 'controllers/dashboard.php',
        '/data-nilai' => 'controllers/data-nilai.php',
        '/mata-kuliah' => 'controllers/mata-kuliah.php',
        '/error' => 'controllers/error.php',
    ];

    function routeToController($uri, $routes) {
        if(array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    }

    function abort($code = 404) {
        http_response_code($code);

        require "views/{$code}.php";

        die();
    }

    routeToController($uri, $routes);