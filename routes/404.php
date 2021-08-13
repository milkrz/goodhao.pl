<?php
    if(isset($router))
    {
        $router->set404(function () {
            require("subpages/404/index.php");
        });
    }
?>