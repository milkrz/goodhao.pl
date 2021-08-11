<?php

require_once('lib/PageTemplate.php');

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>
        <?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; } ?>
    </title>    
</head>
<body>
    <div id="content">
        <?php if(isset($TPL->ContentBody)) { include $TPL->ContentBody; } ?>
    </div>
</body>
</html>