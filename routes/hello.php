<?php
    if(isset($router))
    {
        $router->get('/hello', function () {
            require("subpages/hello/index.php");
         });
       
        $router->get('/hello/(\w+)', function ($name) {
            require("subpages/hello/index.php");
        });
    }
?>