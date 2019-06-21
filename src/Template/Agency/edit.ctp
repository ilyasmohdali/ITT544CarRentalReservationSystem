<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<div class="row">
    <div class="agency large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($agency) ?>
            <div class="form-group">
                <?php echo $this->Form->control('NAME', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('LOCATION', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('CITY', array('class'=>'form-control'));?>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=>'btn btn-warning']); ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
</div>

<div class="agency form large-9 medium-8 columns content">
    <?= $this->Form->create($agency) ?>
    <fieldset>
        <legend><?= __('Edit Agency') ?></legend>
        <?php
            echo $this->Form->control('NAME');
            echo $this->Form->control('LOCATION');
            echo $this->Form->control('CITY');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
