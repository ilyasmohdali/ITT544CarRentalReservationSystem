<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acces[]|\Cake\Collection\CollectionInterface $access
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Acces'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="access index large-9 medium-8 columns content">
    <h3><?= __('Access') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ACCESS_CODE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DESCRIPTION') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($access as $acces): ?>
            <tr>
                <td><?= $this->Number->format($acces->ACCESS_CODE) ?></td>
                <td><?= h($acces->DESCRIPTION) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $acces->ACCESS_CODE]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $acces->ACCESS_CODE]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $acces->ACCESS_CODE], ['confirm' => __('Are you sure you want to delete # {0}?', $acces->ACCESS_CODE)]) ?>
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
