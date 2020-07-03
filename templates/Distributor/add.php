<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Distributor $distributor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Distributor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="distributor form content">
            <?= $this->Form->create($distributor) ?>
            <fieldset>
                <legend><?= __('Add Distributor') ?></legend>
                <?php
                    echo $this->Form->control('ruc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
