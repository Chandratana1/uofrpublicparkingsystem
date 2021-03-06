<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profile'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profiles form large-9 medium-8 columns content">
    <?= $this->Form->create($profile) ?>
    <fieldset>
        <legend><?= __('Add Profile') ?></legend>
        <?php
            //echo $this->Form->control('profile_id');
            echo $this->Form->control('LicenseNumber');
            echo $this->Form->control('VehicleNumber');
            echo $this->Form->control('LastName');
            echo $this->Form->control('FirstName');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
