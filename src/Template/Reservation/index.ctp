<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation[]|\Cake\Collection\CollectionInterface $reservation
 */
?>

<div class="reservation index large-10 medium-8 columns content container-fluid">
     <div class="text-left">
        <?php echo $this->Html->link('Add Reservation',['action'=>'add'],['class'=>'btn btn-success','style'=>'width: 220px;']) ?>
    </div>
    <br/>
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr class="table table-active">
                <th scope="col"><?= $this->Paginator->sort('RESERVATION ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE RENT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE RETURN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DAYS_RENT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TOTAL PAYMENT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AGENCY ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER ID') ?></th>
                <th scope="col" colspan="4"><?= $this->Paginator->sort('ACTION') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservation as $reservation): 
                /*if($session_user['ACCESS_CODE']== 1002){
                    $uid=$this->Number->format($reservation->USER_ID);

                    if($uid == $session_user['USER_ID']){*/?>
            <tr>
                <td><?= $this->Number->format($reservation->RES_NUMBER) ?></td>
                <td><?= h($reservation->START_DATE) ?></td>
                <td><?= h($reservation->END_DATE) ?></td>
                <td><?= $this->Number->format($reservation->DAYS_RENT) ?> Days</td>
                <td>RM<?= $this->Number->format($reservation->PAYMENT) ?></td>
                <td><?= $this->Number->format($reservation->AGENCY_ID) ?></td>
                <td><?= $this->Number->format($reservation->USER_ID) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link('View',['action'=>'view', $reservation->RES_NUMBER],['class'=>'btn btn-info','style'=>'width: 75px;']) ?>
                    <?php echo $this->Html->link('Edit',['action'=>'edit', $reservation->RES_NUMBER],['class'=>'btn btn-warning','style'=>'width: 75px;']) ?>
                    <?= $this->Form->postLink(__('Delete'),['action' => 'delete', $reservation->RES_NUMBER],['class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $reservation->RES_NUMBER)]);/*}}*/?>                    
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
