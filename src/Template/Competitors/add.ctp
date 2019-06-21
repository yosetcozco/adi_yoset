<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competitor $competitor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Competitors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competitors form large-9 medium-8 columns content">
    <?= $this->Form->create($competitor) ?>
    <fieldset>
        <legend><?= __('Add Competitor') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('tutor_id', ['options' => $tutors]);
            echo $this->Form->control('college_id', ['options' => $colleges]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
