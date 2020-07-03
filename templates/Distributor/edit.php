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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $distributor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $distributor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Distributor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="distributor form content">
            <?= $this->Form->create($distributor) ?>
            <fieldset>
                <legend><?= __('Edit Distributor') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('direction');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
