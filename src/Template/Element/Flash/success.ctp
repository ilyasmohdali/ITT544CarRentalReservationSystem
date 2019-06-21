<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="alert alert-dismissible alert-success text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done! </strong><?= $message ?>.
</div>