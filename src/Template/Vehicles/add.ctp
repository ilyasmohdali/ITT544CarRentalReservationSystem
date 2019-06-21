<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehicle $vehicle
 */
?>
<div class="row">
    <div class="large-9 medium-8 columns content container-fluid col-md-7">
    <div class="card">
        <div class="card-body">
            <?php echo $this->Form->create($vehicle) ?>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="MODEL" class="form-control" placeholder="Enter model">
            </div>            
            <div class="form-group">
                <label>Plate Number</label>
                <input type="text" name="PLATE_NUMBER" class="form-control" placeholder="Enter plate number">
            </div>
            <div class="form-group">
                <label>Displacement (Horse Power)</label>
                <input type="number" name="DISPLACEMENT" class="form-control" placeholder="Enter CC">
            </div>
            <div class="form-group">
                <label>Manufacturer code</label>
                    <select class="form-control" id="exampleSelect1" name="MADE_BY">
                    <option value="1">AUDI</option>
                    <option value="2">BMW</option>
                    <option value="3">HONDA</option>
                    <option value="4">MERCEDES</option>
                    <option value="5">NISSAN</option>
                    <option value="6">PROTON</option>
                    <option value="7">PERODUA</option>
                </select> 
            </div>
            <div class="form-group">
                <label>Type Code</label>
                    <select class="form-control" id="exampleSelect1" name="TYPE_CODE">
                    <option value="1">SEDAN</option>
                    <option value="2">COMPACT</option>
                    <option value="3">MPV</option>
                </select> 
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=>'btn btn-warning']); ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
</div>