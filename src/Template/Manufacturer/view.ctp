<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manufacturer $manufacturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Manufacturer'), ['action' => 'edit', $manufacturer->MADE_BY]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manufacturer'), ['action' => 'delete', $manufacturer->MADE_BY], ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->MADE_BY)]) ?> </li>
        <li><?= $this->Html->link(__('List Manufacturer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="manufacturer view large-9 medium-8 columns content">
    <h3><?= h($manufacturer->MADE_BY) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NAME') ?></th>
            <td><?= h($manufacturer->NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HELPLINE') ?></th>
            <td><?= h($manufacturer->HELPLINE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MADE BY') ?></th>
            <td><?= $this->Number->format($manufacturer->MADE_BY) ?></td>
        </tr>
    </table>
</div>
