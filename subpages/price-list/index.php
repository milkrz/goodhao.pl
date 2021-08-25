<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for news");    
    $page->Title = "Cennik";
    $page->HeaderBackground = "/images/renovation.jpg";
    require_once("layouts/loader.php");
    ?>
    
    <div>
        <h2 class="my-5 text-center">Ta strona jest w budowie.</h2>
    </div>