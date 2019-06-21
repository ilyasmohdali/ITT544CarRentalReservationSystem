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
    <div class="large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($user) ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="NAME" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="ADDRESS" class="form-control" placeholder="Enter address"></textarea>
            </div>
            <div class="form-group">
                <label>Phone No</label>
                <input type="number" name="PHONE_NO" class="form-control" placeholder="Enter number">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="EMAIL" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="Password" name="PASSWORD" class="form-control" placeholder="Enter password">
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
