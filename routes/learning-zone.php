<?php
if (isset($router)) {
    $router->get('/learning-zone/english', function () {
        require("subpages/learning-zone/index_english.php");
    });
    $router->get('/learning-zone/polish', function () {
        require("subpages/learning-zone/index_polish.php");
    });
    $router->get('/learning-zone/chinese', function () {
        require("subpages/learning-zone/index_chinese.php");
    });
}
