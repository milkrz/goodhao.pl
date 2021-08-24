<?php
require_once('lib/Page.php');
$page = new Page(__FILE__, "default");
$page->Title = "Nieprawidłowa strona";
$page->HeaderBackground = "/images/404.jpg"; 
require_once("layouts/loader.php");
?>

<div class="text-center py-5">
    <h2>
        Ups! Podana strona nie istnieje!
    </h2>
</div>