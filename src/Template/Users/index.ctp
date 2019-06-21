<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
if (isset($_SESSION['Auth']['User']['ACCESS_CODE'])){
    if ($_SESSION['Auth']['User']['ACCESS_CODE'] == '1001'){
    }else {
         echo "Your are not admin!... Dont do this!";
        die();
    }
}
?>
<div class="users index large-10 medium-8 columns content container-fluid">
     <div class="text-left">
        <?php echo $this->Html->link('Add User',['action'=>'add'],['class'=>'btn btn-success','style'=>'width: 220px;']) ?>
    </div>
    <br/>
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr class="table table-active">
                <th scope="col" ><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('NAME') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('ADDRESS') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('PHONE_NO') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('EMAIL') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('ACCESS_CODE') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('ACTION') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td ><?= $this->Number->format($user->USER_ID) ?></td>
                <td ><?= h($user->NAME) ?></td>
                <td ><?= h($user->ADDRESS) ?></td>
                <td ><?= h($user->PHONE_NO) ?></td>
                <td ><?= h($user->EMAIL) ?></td>
                <td ><?= $this->Number->format($user->ACCESS_CODE) ?></td>
                <td  class="actions">
                    <?php echo $this->Html->link('View',['action'=>'view', $user->USER_ID],['class'=>'btn btn-info','style'=>'width: 75px;']) ?>
                    <?php echo $this->Html->link('Edit',['action'=>'edit', $user->USER_ID],['class'=>'btn btn-warning','style'=>'width: 75px;']) ?>
                    <?= $this->Form->postLink(__('Delete'),['action' => 'delete', $user->USER_ID],['class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $user->USER_ID)]) ?>
                </td>
            </tr>
            <?php 
            endforeach;
        ?>
    </tbody>
</table> 
    </div>
</div>
</div>
