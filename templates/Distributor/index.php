<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Distributor[]|\Cake\Collection\CollectionInterface $distributor
 */
?>
<div class="distributor index content">
    <?= $this->Html->link(__('New Distributor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Distributor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('direction') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($distributor as $distributor): ?>
                <tr>
                    <td><?= $this->Number->format($distributor->id) ?></td>
                    <td><?= h($distributor->name) ?></td>
                    <td><?= h($distributor->direction) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $distributor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $distributor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $distributor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $distributor->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
