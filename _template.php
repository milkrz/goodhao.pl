<?php
    # dynamic content
    $title = "Title for default layout";

    #constant content
    $content = __FILE__;
    require_once("common/default_layout_loader.php");
?>

<p><?php echo "This is a template for default layout!"; ?></p>