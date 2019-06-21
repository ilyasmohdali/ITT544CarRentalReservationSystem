<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-dismissible alert-secondary text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?= $message ?>
</div>
