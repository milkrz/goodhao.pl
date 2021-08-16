<?php
    if(isset($router))
    {
        $router->get('/contact', function () {
            require("subpages/contact/index.php");
         });
    }
?>