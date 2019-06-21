<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Winner[]|\Cake\Collection\CollectionInterface $winners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Winner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="winners index large-9 medium-8 columns content">
    <h3><?= __('Winners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('college_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($winners as $winner): ?>
            <tr>
                <td><?= $this->Number->format($winner->id) ?></td>
                <td><?= $winner->has('college') ? $this->Html->link($winner->college->name, ['controller' => 'Colleges', 'action' => 'view', $winner->college->id]) : '' ?></td>
                <td><?= $winner->has('student') ? $this->Html->link($winner->student->name, ['controller' => 'Students', 'action' => 'view', $winner->student->id]) : '' ?></td>
                <td><?= $winner->has('tutor') ? $this->Html->link($winner->tutor->name, ['controller' => 'Tutors', 'action' => 'view', $winner->tutor->id]) : '' ?></td>
                <td><?= $this->Number->format($winner->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $winner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $winner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $winner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $winner->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
