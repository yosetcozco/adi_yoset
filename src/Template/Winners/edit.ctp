<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Winner $winner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $winner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $winner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Winners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="winners form large-9 medium-8 columns content">
    <?= $this->Form->create($winner) ?>
    <fieldset>
        <legend><?= __('Edit Winner') ?></legend>
        <?php
            echo $this->Form->control('college_id', ['options' => $colleges]);
            echo $this->Form->control('student_id', ['options' => $students]);
            echo $this->Form->control('tutor_id', ['options' => $tutors]);
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
