<?php
    if(isset($router))
    {
        $router->get('/about', function () {
            require("subpages/about/index.php");
         });
    }
?>