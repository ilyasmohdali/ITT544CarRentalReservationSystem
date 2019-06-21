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
<br/><br/><br/>
<div class="">
<div class="users view large-9 medium-8 columns content container-fluid col-md-5">
    <h2><?= h($user->USER_ID) ?></h2>
    <table class="table vertical-table table-borderer table-hover">
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('NAME') ?></th>
            <td><?= h($user->NAME) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('ADDRESS') ?></th>
            <td><?= h($user->ADDRESS) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('PHONE NO') ?></th>
            <td><?= h($user->PHONE_NO) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('EMAIL') ?></th>
            <td><?= h($user->EMAIL) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('PASSWORD') ?></th>
            <td><?= h($user->PASSWORD) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('USER ID') ?></th>
            <td><?= $this->Number->format($user->USER_ID) ?></td>
        </tr>
        <tr>
            <th style="color: rgb(233,84,32);" scope="row"><?= __('ACCESS CODE') ?></th>
            <td><?= $access = ($this->Number->format($user->ACCESS_CODE)); if($access == '1,001'){echo ' - Admin';} else echo ' - User'; ?></td>
        </tr>
    </table>

    <?php echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-primary','style'=>'width: 200px; ']) ?>

</div>    
</div>
