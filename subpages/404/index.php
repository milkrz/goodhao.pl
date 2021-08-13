<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for 404");    
    require_once("layouts/loader.php");
?>

<?php
   header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
   echo '404, route not found!';
?>