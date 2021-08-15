<?php
    if(isset($router))
    {
        $router->get('/job', function () {
            require("subpages/job/index.php");
         });
    }
?>