<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for job");    
    require_once("layouts/loader.php");
?>

<?php
    echo "<br /><h1>job list</h1>";
?>