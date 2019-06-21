<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type $type
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->TYPE_CODE]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->TYPE_CODE], ['confirm' => __('Are you sure you want to delete # {0}?', $type->TYPE_CODE)]) ?> </li>
        <li><?= $this->Html->link(__('List Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="type view large-9 medium-8 columns content">
    <h3><?= h($type->TYPE_CODE) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DESCRIPTION') ?></th>
            <td><?= h($type->DESCRIPTION) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TYPE CODE') ?></th>
            <td><?= $this->Number->format($type->TYPE_CODE) ?></td>
        </tr>
    </table>
</div>
