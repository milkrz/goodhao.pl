<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for default");    
    require_once("layouts/loader.php");
?>

<?php
    echo 'movies overview ';    
    echo '<br />';
    echo print_r($_SESSION,true);
    unset($_SESSION["XXX"]);
?>
    <br />
    <a href="/movies/3">Edit movie 3</a>
    <br />
    <a href="/">Back to main</a>
 
