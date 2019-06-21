<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Winner $winner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Winner'), ['action' => 'edit', $winner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Winner'), ['action' => 'delete', $winner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $winner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Winners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Winner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="winners view large-9 medium-8 columns content">
    <h3><?= h($winner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('College') ?></th>
            <td><?= $winner->has('college') ? $this->Html->link($winner->college->name, ['controller' => 'Colleges', 'action' => 'view', $winner->college->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $winner->has('student') ? $this->Html->link($winner->student->name, ['controller' => 'Students', 'action' => 'view', $winner->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tutor') ?></th>
            <td><?= $winner->has('tutor') ? $this->Html->link($winner->tutor->name, ['controller' => 'Tutors', 'action' => 'view', $winner->tutor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($winner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= $this->Number->format($winner->note) ?></td>
        </tr>
    </table>
</div>
