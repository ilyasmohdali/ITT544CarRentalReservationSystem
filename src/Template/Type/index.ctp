<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type[]|\Cake\Collection\CollectionInterface $type
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="type index large-9 medium-8 columns content">
    <h3><?= __('Type') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('TYPE_CODE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DESCRIPTION') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($type as $type): ?>
            <tr>
                <td><?= $this->Number->format($type->TYPE_CODE) ?></td>
                <td><?= h($type->DESCRIPTION) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $type->TYPE_CODE]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $type->TYPE_CODE]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $type->TYPE_CODE], ['confirm' => __('Are you sure you want to delete # {0}?', $type->TYPE_CODE)]) ?>
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
