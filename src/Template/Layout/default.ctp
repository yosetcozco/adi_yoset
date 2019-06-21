<?php

$adi = 'ADI';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $adi ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css(['bootstrap.min','fondo']) ?>
    <?= $this->Html->script(['bootstrap.min','jquery-3.4.1.min']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?= $this->Html->link('ADI',['controller'=>'Pages','action'=>'home'],['class'=>'navbar-brand'])?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
        <?= $this->Html->link('Colleges', ['controller' => 'Colleges', 'action' => 'index'],['class'=>'nav-link'])?>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <!--
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     -->    
     <?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login'],['class'=>'btn btn-outline-success my-2 my-sm-0'])?>
     <?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'],['class'=>'btn btn-outline-error my-2 my-sm-0'])?>
    </form>
  </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
