<?php
    if(isset($router))
    {
        $router->get('/', function () {
            require("subpages/main/index.php");
         });
    }
?>