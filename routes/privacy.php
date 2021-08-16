<?php
    if(isset($router))
    {
        $router->get('/privacy', function () {
            require("subpages/privacy/index.php");
         });
    }
?>