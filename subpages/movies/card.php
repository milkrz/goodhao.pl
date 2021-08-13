<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for default");    
    require_once("layouts/loader.php");
?>

<?php
    echo 'movie id ' . htmlentities($id);


?>
<h2>POST</h2>
<form action="/movies" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
<br />
<a href="/movies">Back to movies</a>