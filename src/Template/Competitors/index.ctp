<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competitor[]|\Cake\Collection\CollectionInterface $competitors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Competitor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competitors index large-9 medium-8 columns content">
    <h3><?= __('Competitors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('college_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competitors as $competitor): ?>
            <tr>
                <td><?= $this->Number->format($competitor->id) ?></td>
                <td><?= $competitor->has('user') ? $this->Html->link($competitor->user->name, ['controller' => 'Users', 'action' => 'view', $competitor->user->id]) : '' ?></td>
                <td><?= $competitor->has('tutor') ? $this->Html->link($competitor->tutor->name, ['controller' => 'Tutors', 'action' => 'view', $competitor->tutor->id]) : '' ?></td>
                <td><?= $competitor->has('college') ? $this->Html->link($competitor->college->name, ['controller' => 'Colleges', 'action' => 'view', $competitor->college->id]) : '' ?></td>
                <td><?= h($competitor->status) ?></td>
                <td><?= h($competitor->created) ?></td>
                <td><?= h($competitor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $competitor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competitor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competitor->id)]) ?>
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
