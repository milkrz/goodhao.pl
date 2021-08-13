<?php
    session_set_cookie_params(['samesite' => 'Strict']);
    session_start();
    
    if(file_exists('_debug_mode'))
    {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }

    // Include the Router class
    // @note: it's recommended to just use the composer autoloader when working with other packages too
    require_once __DIR__ . '/lib/Router.php';

    // Create a Router
    $router = new \Bramus\Router\Router();
    
    // Load routes
    $files = scandir(__DIR__.'/routes/', SCANDIR_SORT_ASCENDING);
    foreach (glob(__DIR__.'/routes/*.php') as $route_file)
    {       
        require_once($route_file);     
    }
 
    $router->run();
?>