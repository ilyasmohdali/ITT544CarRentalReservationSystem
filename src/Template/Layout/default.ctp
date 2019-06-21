<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <?php if($session_user['ACCESS_CODE'] != null){ ?> 
            <a class="navbar-brand" href="#"><h2><?= $this->fetch('title') ?></h2></a>
      <?php } ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">

      <li class="rightnav-item">
      <?php if($session_user['ACCESS_CODE'] == 1001){ ?> 
        <?php echo $this->Html->link('Register New User','/users',['class'=>'nav-link'])?> 
      </li>
      <li class="nav-item">
      <?php echo $this->Html->link('Make A Reservation','/reservation',['class'=>'nav-link']); ?>
      </li>
      <li class="nav-item">
      <?php echo $this->Html->link('Agency','/agency',['class'=>'nav-link']); ?>
      </li>
      <li class="nav-item">
      <?php echo $this->Html->link('Vehicle','/vehicles',['class'=>'nav-link']); ?>
      </li>             
      <?php   
      }else if($session_user['ACCESS_CODE'] == 1002){?>
      <li class="nav-item">
      <?php echo $this->Html->link('Make A Reservation','/reservation',['class'=>'nav-link']); ?>
      </li>
      <li class="nav-item">
      <?php echo $this->Html->link('Agency','/agency',['class'=>'nav-link']); ?>
      </li>
      <li class="nav-item">
      <?php echo $this->Html->link('Vehicle','/vehicles',['class'=>'nav-link']); ?>
      </li>      
      <?php } ?>
      </ul>

       <?php if($session_user['ACCESS_CODE'] != null){ ?> 
      <form class="form-inline my-2 my-lg-0">
          <?php echo $this->Html->link('Logout', ['controller'=>'Users', 'action'=>'logout'],['class'=>'btn btn-primary btn-lg']); ?>
      </form>
      <?php } ?>
  </div>
</nav>
    
    <br/><br>
    <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>