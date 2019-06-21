<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>

<br/><br/><br/>
<div class="">
<div class="users view large-9 medium-8 columns content container-fluid col-md-5">
    <h2><?= h($reservation->RES_NUMBER) ?></h2>
    <table class="table vertical-table table-borderer table-hover">
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('Reservation ID') ?></th>
            <td><?= $this->Number->format($reservation->RES_NUMBER) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('Days of rent') ?></th>
            <td><?= $this->Number->format($reservation->DAYS_RENT) ?> Days</td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('Total payament') ?></th>
            <td>RM<?= $this->Number->format($reservation->PAYMENT) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('Ageny ID') ?></th>
            <td><?= $this->Number->format($reservation->AGENCY_ID) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('User ID') ?></th>
            <td><?= $this->Number->format($reservation->USER_ID) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('Start rental date') ?></th>
            <td><?= h($reservation->START_DATE) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('End rental date') ?></th>
            <td><?= h($reservation->END_DATE) ?></td>
        </tr>
    </table>

    <?php echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-primary','style'=>'width: 200px; ']) ?>

</div>    
</div>
