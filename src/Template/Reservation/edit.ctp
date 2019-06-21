<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>
<div class="row">
    <div class="reservation large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($reservation) ?>
            <div class="form-group">
                <?php echo $this->Form->control('START_DATE', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('END_DATE', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('DAYS_RENT', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('PAYMENT', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('AGENCY_ID', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('USER_ID', array('class'=>'form-control'));?>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=>'btn btn-warning']); ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
