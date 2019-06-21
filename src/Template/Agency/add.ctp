<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<div class="row">
    <div class="large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($agency) ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="NAME" class="form-control" placeholder="Enter name">
            </div>            
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="LOCATION" class="form-control" placeholder="Enter location">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="CITY" class="form-control" placeholder="Enter city">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=>'btn btn-warning']); ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
