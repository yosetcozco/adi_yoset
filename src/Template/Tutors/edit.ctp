<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tutor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tutors form large-9 medium-8 columns content">
    <?= $this->Form->create($tutor) ?>
    <fieldset>
        <legend><?= __('Edit Tutor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('dni');
            echo $this->Form->control('college_id', ['options' => $colleges]);
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('level_id', ['options' => $levels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
