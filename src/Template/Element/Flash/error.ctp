<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-dismissible alert-danger text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap! </strong><?= $message ?>
</div>
