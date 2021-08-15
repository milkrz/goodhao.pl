<?php
    if(isset($router))
    {
        $router->get('/price-list', function () {
            require("subpages/price-list/index.php");
         });
    }
?>