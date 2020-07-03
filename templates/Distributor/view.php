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
            <?= $this->Html->link(__('Edit Distributor'), ['action' => 'edit', $distributor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Distributor'), ['action' => 'delete', $distributor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $distributor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Distributor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Distributor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="distributor view content">
            <h3><?= h($distributor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($distributor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direction') ?></th>
                    <td><?= h($distributor->direction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($distributor->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
