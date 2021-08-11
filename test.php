<?php

require_once('lib/PageTemplate.php');

# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "My Title";
    $TPL->ContentBody = __FILE__;
    include "layouts/default.php";
    exit;
}
?>
<p><?php echo "Hello!"; ?></p>