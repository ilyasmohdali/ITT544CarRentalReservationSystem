<br/><br/><br/>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <?php echo $this->Flash->render() ?>
        <div class="card">
            <h3 class="card-header">Login</h3>
            <div class="card-body">
                <?php echo $this->Form->create() ?>
                <div class="form-group">
                    <?php echo $this->Form->input('EMAIL', ['class' => 'form-control']) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('PASSWORD', ['class' => 'form-control', 'type' => 'password']) ?>
                </div>
                <?php 
                    echo $this->Form->button('Login', ['class' => 'btn btn-primary','style'=>'width: 75px;']);
                    echo $this->Form->end();
                ?>                
            </div>
        </div>
    </div>
</div>