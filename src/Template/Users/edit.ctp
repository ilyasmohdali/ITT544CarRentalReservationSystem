<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
if (isset($_SESSION['Auth']['User']['ACCESS_CODE'])){
    if ($_SESSION['Auth']['User']['ACCESS_CODE'] == '1001'){
    }else {
         echo "Your are not admin!... Dont do this!";
        die();
    }
}
?>
<div class="row">
    <div class="users large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($user) ?>
            <div class="form-group">
                <?php echo $this->Form->control('NAME', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('ADDRESS', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('PHONE_NO', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('EMAIL', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('PASSWORD', array('class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Access Code</label>
                <select class="form-control" id="exampleSelect1" name="ACCESS_CODE">
                    <option>1001</option>
                    <option>1002</option>
                </select>              
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=>'btn btn-warning']); ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
</div>