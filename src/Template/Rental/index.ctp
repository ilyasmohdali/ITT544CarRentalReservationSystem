<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental[]|\Cake\Collection\CollectionInterface $rental
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rental'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rental index large-9 medium-8 columns content">
    <h3><?= __('Rental') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('RENT_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RES_NUMBER') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PLATE_NUMBER') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rental as $rental): ?>
            <tr>
                <td><?= $this->Number->format($rental->RENT_ID) ?></td>
                <td><?= $this->Number->format($rental->RES_NUMBER) ?></td>
                <td><?= h($rental->PLATE_NUMBER) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rental->RENT_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rental->RENT_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rental->RENT_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $rental->RENT_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
