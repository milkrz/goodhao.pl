<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for default");    
    require_once("layouts/loader.php");
?>

<?php

?>
<table>
  <?php
    for($i=0;$i<150;$i++)
    {
      echo '<tr>';
      for($j=0;$j<20;$j++)
      {
        echo '<td>'.'name '.$i.'</td>';
      }
      echo '</tr>';

    }
  ?>

</table>