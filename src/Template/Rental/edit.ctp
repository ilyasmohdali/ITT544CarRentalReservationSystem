<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental $rental
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rental->RENT_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rental->RENT_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rental'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rental form large-9 medium-8 columns content">
    <?= $this->Form->create($rental) ?>
    <fieldset>
        <legend><?= __('Edit Rental') ?></legend>
        <?php
            echo $this->Form->control('RES_NUMBER');
            echo $this->Form->control('PLATE_NUMBER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
