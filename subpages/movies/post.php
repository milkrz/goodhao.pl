<?php
    $test = "POST ".date("Y-m-d H:i:s")." saved ".print_r($_POST,true);
    $_SESSION["XXX"] = $test;
    header("Location: /movies");
?>