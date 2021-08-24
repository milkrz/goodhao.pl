<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default");   
    $page->Title = "Aktualności";
    $page->HeaderBackground = "/images/news.jpg"; 
    require_once("layouts/loader.php");
?>

