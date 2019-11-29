<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kuote[]|\Cake\Collection\CollectionInterface $kuotes
 */
?>
<div class="kuotes index content">
    <?= $this->Html->link(__('New Kuote'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kuotes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('author_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted_at') ?></th>
                    <th><?= $this->Paginator->sort('by_admin') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kuotes as $kuote): ?>
                <tr>
                    <td><?= $this->Number->format($kuote->id) ?></td>
                    <td><?= $kuote->has('author') ? $this->Html->link($kuote->author->name, ['controller' => 'Authors', 'action' => 'view', $kuote->author->id]) : '' ?></td>
                    <td><?= h($kuote->status) ?></td>
                    <td><?= h($kuote->created) ?></td>
                    <td><?= h($kuote->modified) ?></td>
                    <td><?= h($kuote->deleted_at) ?></td>
                    <td><?= h($kuote->by_admin) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kuote->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kuote->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kuote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kuote->id)]) ?>
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
