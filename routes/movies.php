<?php
    if(isset($router))
    {
        $router->mount('/movies', function () use ($router) {

            // will result in '/movies'
            $router->get('/', function () {
                require("subpages/movies/index.php");                
            });
    
            // will result in '/movies'
            $router->post('/', function () {
                require("subpages/movies/post.php");                                
            });
    
            // will result in '/movies/id'
            $router->get('/(\d+)', function ($id) {
                require("subpages/movies/card.php");                       
            });
    
        });
    }
?>