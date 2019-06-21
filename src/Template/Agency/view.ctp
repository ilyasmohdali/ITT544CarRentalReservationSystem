<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<br/><br/><br/>
<div class="">
<div class="agency view large-9 medium-8 columns content container-fluid col-md-5">
    <h2><?= h($agency->AGENCY_ID) ?></h2>
    <table class="table vertical-table table-borderer table-hover">
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('NAME') ?></th>
            <td><?= h($agency->NAME) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('LOCATION') ?></th>
            <td><?= h($agency->LOCATION) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('CITY') ?></th>
            <td><?= h($agency->CITY) ?></td>
        </tr>
    </table>
    <?php echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-primary','style'=>'width: 200px; ']) ?>

</div>    
</div>