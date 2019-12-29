<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Timing $timing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $timing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $timing->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Timings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="timings form large-9 medium-8 columns content">
    <?= $this->Form->create($timing) ?>
    <fieldset>
        <legend><?= __('Edit Timing') ?></legend>
        <?php
            echo $this->Form->control('Date');
            echo $this->Form->control('Start_time');
            echo $this->Form->control('End_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
