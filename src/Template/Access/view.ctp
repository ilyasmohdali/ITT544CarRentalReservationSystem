<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acces $acces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Acces'), ['action' => 'edit', $acces->ACCESS_CODE]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Acces'), ['action' => 'delete', $acces->ACCESS_CODE], ['confirm' => __('Are you sure you want to delete # {0}?', $acces->ACCESS_CODE)]) ?> </li>
        <li><?= $this->Html->link(__('List Access'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Acces'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="access view large-9 medium-8 columns content">
    <h3><?= h($acces->ACCESS_CODE) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DESCRIPTION') ?></th>
            <td><?= h($acces->DESCRIPTION) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ACCESS CODE') ?></th>
            <td><?= $this->Number->format($acces->ACCESS_CODE) ?></td>
        </tr>
    </table>
</div>
