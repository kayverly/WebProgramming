<?php
foreach ($_REQUEST as $param => $value) {
  ?>
  <p>Parameter <?= $param ?> has value <?= $value ?></p>
  <?php
}
?>