<?php
    if(isset($router))
    {
        $router->get('/employee', function () {
            require("subpages/employee/index.php");
         });
    }
?>