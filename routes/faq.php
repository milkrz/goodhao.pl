<?php
    if(isset($router))
    {
        $router->get('/faq', function () {
            require("subpages/faq/index.php");
         });
    }
?>