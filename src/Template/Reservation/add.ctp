<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>

<div class="row">
    <div class="large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($reservation) ?>
            <div class="form-group">
                <label>Start rental date</label>
                <input type="date" name="START_DATE" class="form-control" placeholder="Enter date">
            </div>
            <div class="form-group">
                <label>Return date</label>
                <input type="date" name="END_DATE" class="form-control" placeholder="Enter date">
            </div>
            <div class="form-group">
                <label>Rental period (Day)</label>
                <input type="number" name="DAYS_RENT" class="form-control" placeholder="Enter period">
            </div>
            <div class="form-group">
                <label>Total Payment</label>
                <input type="number" name="PAYMENT" class="form-control" placeholder="Enter total payment">
            </div>
            <div class="form-group">
                <label>Agency ID</label>
                <input type="text" name="AGENCY_ID" class="form-control" placeholder="Enter agency ID">
            </div>
            <div class="form-group">
                <label>User ID</label>
                <input type="text" name="USER_ID" class="form-control" placeholder="Enter User ID">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=>'btn btn-warning']); ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
</div>