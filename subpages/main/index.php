<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for default");    
    require_once("layouts/loader.php");
?>

<?php

?>

<table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lorem</th>
      <th scope="col">Ipsum</th>
      <th scope="col">Dolor</th>
    </tr>
  </thead>
  <tbody>
    <?php
      for($i=1;$i<40;$i+=3)
      {
    ?>
      <tr>
        <th scope="row"><?php echo $i+0 ?></th>
        <td>Sit</td>
        <td>Amet</td>
        <td>
          <button type="button" class="btn btn-danger btn-sm px-3">
            <i class="fas fa-times"></i>
          </button>
        </td>
      </tr>
      <tr>
        <th scope="row"><?php echo $i+1 ?></th>
        <td>Adipisicing</td>
        <td>Elit</td>
        <td>
          <button type="button" class="btn btn-danger btn-sm px-3">
            <i class="fas fa-times"></i>
          </button>
        </td>
      </tr>
      <tr>
        <th scope="row"><?php echo $i+2 ?></th>
        <td>Hic</td>
        <td>Fugiat</td>
        <td>
          <button type="button" class="btn btn-danger btn-sm px-3">
            <i class="fas fa-times"></i>
          </button>
        </td>
      </tr>
    <?php
      }
    ?>
  </tbody>
</table>

