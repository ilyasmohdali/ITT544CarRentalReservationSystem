<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental $rental
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rental'), ['action' => 'edit', $rental->RENT_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rental'), ['action' => 'delete', $rental->RENT_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $rental->RENT_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Rental'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rental view large-9 medium-8 columns content">
    <h3><?= h($rental->RENT_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PLATE NUMBER') ?></th>
            <td><?= h($rental->PLATE_NUMBER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RENT ID') ?></th>
            <td><?= $this->Number->format($rental->RENT_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RES NUMBER') ?></th>
            <td><?= $this->Number->format($rental->RES_NUMBER) ?></td>
        </tr>
    </table>
</div>
