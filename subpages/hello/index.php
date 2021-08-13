<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for hello");    
    require_once("layouts/loader.php");
?>

<?php
    echo '<h1>bramus/router</h1><p>Visit <code>/hello/<em>name</em></code> to get your Hello World mojo on!</p>';
    
    if(isset($name))
    {
        echo '<br />';
        echo 'Hello ' . htmlentities($name);
    }
    if(sizeof($_GET)>0)
    {
        echo print_r($_GET,true);
    }
?>