<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competitor $competitor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competitor'), ['action' => 'edit', $competitor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competitor'), ['action' => 'delete', $competitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competitor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competitors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competitor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competitors view large-9 medium-8 columns content">
    <h3><?= h($competitor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $competitor->has('user') ? $this->Html->link($competitor->user->name, ['controller' => 'Users', 'action' => 'view', $competitor->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tutor') ?></th>
            <td><?= $competitor->has('tutor') ? $this->Html->link($competitor->tutor->name, ['controller' => 'Tutors', 'action' => 'view', $competitor->tutor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('College') ?></th>
            <td><?= $competitor->has('college') ? $this->Html->link($competitor->college->name, ['controller' => 'Colleges', 'action' => 'view', $competitor->college->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($competitor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($competitor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($competitor->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $competitor->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
