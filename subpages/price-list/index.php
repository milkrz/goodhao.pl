<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for news");    
    $page->Title = "Cennik";
    $page->HeaderBackground = "/images/about.jpg"; 
    require_once("layouts/loader.php");
?>
