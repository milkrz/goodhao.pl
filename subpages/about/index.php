<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default");    
    $page->Title = "Nasz zespół";
    $page->HeaderBackground = "/images/about.jpg"; 
    require_once("layouts/loader.php");
?>

