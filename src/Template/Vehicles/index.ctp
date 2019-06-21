<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehicle[]|\Cake\Collection\CollectionInterface $vehicles
 */
?>
<div class="vehicles index large-10 medium-8 columns content container-fluid">
     <div class="text-left">
        <?php echo $this->Html->link('Add Vehicle',['action'=>'add'],['class'=>'btn btn-success','style'=>'width: 220px;']) ?>
    </div>
    <br/>
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr class="table table-active">
                <th scope="col" colspan="2"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col" colspan="4"><?= $this->Paginator->sort('PLATE NUMBER') ?></th>
                <th scope="col" colspan="5"><?= $this->Paginator->sort('MODEL') ?></th>
                <th scope="col" colspan="4"><?= $this->Paginator->sort('DISPLACEMENT') ?></th>
                <th scope="col" colspan="4"><?= $this->Paginator->sort('MADE BY') ?></th>
                <th scope="col" colspan="2"><?= $this->Paginator->sort('TYPE CODE') ?></th>
                <th scope="col" colspan="4"><?= $this->Paginator->sort('ACTION') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehicles as $vehicle): ?>
            <tr>
                <td colspan="2"><?= h($vehicle->ID) ?></td>
                <td colspan="4"><?= h($vehicle->PLATE_NUMBER) ?></td>
                <td colspan="5"><?= h($vehicle->MODEL) ?></td>
                <td colspan="4"><?= h($vehicle->DISPLACEMENT) ?> CC</td>
                <td colspan="4"><?= h($vehicle->MADE_BY) ?></td>
                <td colspan="2"><?= h($vehicle->TYPE_CODE) ?></td>

                <td colspan="4" class="actions">
                    <?php echo $this->Html->link('View',['action'=>'view', $vehicle->ID],['class'=>'btn btn-info','style'=>'width: 75px;']) ?>
                    <?php echo $this->Html->link('Edit',['action'=>'edit', $vehicle->ID],['class'=>'btn btn-warning','style'=>'width: 75px;']) ?>
                    <?= $this->Form->postLink(__('Delete'),['action' => 'delete', $vehicle->ID],['class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $vehicle->ID)]) ?>
                </td>
            </tr>
            <?php 
            endforeach;
        ?>
    </tbody>
</table> 
    </div>
</div>
</div>