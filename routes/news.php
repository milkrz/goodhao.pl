<?php
    if(isset($router))
    {
        $router->get('/news', function () {
            require("subpages/news/index.php");
         });
    }
?>