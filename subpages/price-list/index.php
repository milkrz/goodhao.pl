<?php
require_once('lib/Page.php');
if (!isset($page)) {
    $page = new Page(__FILE__, "default", "Title for news");
    $page->Title = "Cennik";
    $page->HeaderBackground = "/images/renovation.jpg";
    require_once("layouts/loader.php");
    exit;
}
?>

<h2 class="text-center">Ta strona jest w budowie.</h2>