<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehicle $vehicle
 */
?>

<br/><br/><br/>
<div class="">
<div class="vehicles view large-9 medium-8 columns content container-fluid col-md-5">
    <h2><?= h($vehicle->ID) ?></h2>
    <table class="table vertical-table table-borderer table-hover">
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('NAME') ?></th>
            <td><?= h($vehicle->PLATE_ID) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('PLATE NUMBER') ?></th>
            <td><?= h($vehicle->PLATE_NUMBER) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('MODEL') ?></th>
            <td><?= h($vehicle->MODEL) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('DISPLACEMENT (CC)') ?></th>
            <td><?= h($vehicle->DISPLACEMENT) ?> CC</td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('MADE BY') ?></th>
            <td><?= $mb = ($this->Number->format($vehicle->MADE_BY)); if($mb==1){echo ' - AUDI';} elseif($mb==2){echo ' - BMW';}
            elseif($mb==3){echo ' - HONDA';} elseif($mb==4){echo ' - MERCEDES';} elseif($mb==5){echo ' - NISSAN';} elseif($mb==6){echo ' - PROTON';} elseif($mb==7){echo ' - PERODUA';}?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('TYPE CODE') ?></th>
            <td><?= $tc = ($this->Number->format($vehicle->TYPE_CODE)); if($tc==1){echo ' - SEDAN';} elseif($tc==2){echo ' - COMPACT';} elseif($tc==3){echo ' - MPV';} ?></td>
        </tr>
    </table>

    <?php echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-primary','style'=>'width: 200px; ']) ?>

</div>    
</div>
