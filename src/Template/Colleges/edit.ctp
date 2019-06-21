<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\College $college
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $college->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $college->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Colleges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="colleges form large-9 medium-8 columns content">
    <?= $this->Form->create($college) ?>
    <fieldset>
        <legend><?= __('Edit College') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('level_id', ['options' => $levels]);
            echo $this->Form->control('name');
            echo $this->Form->control('director');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('district');
            echo $this->Form->control('province');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
