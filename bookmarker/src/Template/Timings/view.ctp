<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Timing $timing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Timing'), ['action' => 'edit', $timing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Timing'), ['action' => 'delete', $timing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Timings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timing'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timings view large-9 medium-8 columns content">
    <h3><?= h($timing->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($timing->Date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($timing->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($timing->Start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($timing->End_time) ?></td>
        </tr>
    </table>
</div>
