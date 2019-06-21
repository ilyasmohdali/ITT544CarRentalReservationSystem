<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency[]|\Cake\Collection\CollectionInterface $agency
 */
?>
<div class="agency index large-10 medium-8 columns content container-fluid">
     <div class="text-left">
        <?php echo $this->Html->link('Add Agency',['action'=>'add'],['class'=>'btn btn-success','style'=>'width: 220px;']) ?>
    </div>
    <br/>
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr class="table table-active">
                <th scope="col" colspan="2"><?= $this->Paginator->sort('AGENCY_ID') ?></th>
                <th scope="col" colspan="5"><?= $this->Paginator->sort('NAME') ?></th>
                <th scope="col" colspan="4"><?= $this->Paginator->sort('LOCATION') ?></th>
                <th scope="col" colspan="4"><?= $this->Paginator->sort('CITY') ?></th>
                <th scope="col" colspan="2"><?= $this->Paginator->sort('ACTION') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agency as $agency): ?>
            <tr>
                <td colspan="2"><?= $this->Number->format($agency->AGENCY_ID) ?></td>
                <td colspan="5"><?= h($agency->NAME) ?></td>
                <td colspan="4"><?= h($agency->LOCATION) ?></td>
                <td colspan="4"><?= h($agency->CITY) ?></td>
                <td colspan="2" class="actions">
                    <?php echo $this->Html->link('View',['action'=>'view', $agency->AGENCY_ID],['class'=>'btn btn-info','style'=>'width: 75px;']) ?>
                    <?php echo $this->Html->link('Edit',['action'=>'edit', $agency->AGENCY_ID],['class'=>'btn btn-warning','style'=>'width: 75px;']) ?>
                    <?= $this->Form->postLink(__('Delete'),['action' => 'delete', $agency->AGENCY_ID],['class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $agency->AGENCY_ID)]) ?>
                </td>
            </tr>
            <?php 
            endforeach;
        ?>
    </tbody>
</table>
<style>
    #map{
        height: 500px;
        width: 90%;
    }
</style>
    <div id="map"></div>

    <script>
        function initMap(){
            var location = {lat: 3.4622997, lng: 101.653255};
            var map = new google.maps.Map(document.getElementById("map"),{zoom:12,
                center:location});
            var marker = new google.maps.Marker({
                position: location;
                map: map
            });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/
                js?key=AIzaSyCCuRxP7xkeU59teXxxtecj2okpVN713Ws&callback=initMap">></script>
    </div>
</div>
</div>