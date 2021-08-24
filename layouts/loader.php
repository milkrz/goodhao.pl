<?php   
    require_once('lib/PageTemplate.php');

    # trick to execute 1st time, but not 2nd so you don't have an inf loop
    if (!isset($TPL)) {

        if(!isset($page))
        {
            echo ("Page variable was not found!");
            exit;
        }

        $TPL = new PageTemplate();
        $TPL->Page = $page;

        require_once("layouts/".$page->PageLayout.".php");
        exit;
    }   
?>