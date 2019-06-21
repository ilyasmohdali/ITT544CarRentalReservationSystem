<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehicle $vehicle
 */
?>

<div class="row">
    <div class="vehicles large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($vehicle) ?>
            <div class="form-group">
                <?php echo $this->Form->control('MODEL', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('PLATE_NUMBER', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('DISPLACEMENT', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('MADE_BY', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('TYPE_CODE', array('class'=>'form-control'));?>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=>'btn btn-warning']); ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
