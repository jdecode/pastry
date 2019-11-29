<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kuote $kuote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kuote'), ['action' => 'edit', $kuote->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kuote'), ['action' => 'delete', $kuote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kuote->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kuotes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kuote'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kuotes view content">
            <h3><?= h($kuote->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Author') ?></th>
                    <td><?= $kuote->has('author') ? $this->Html->link($kuote->author->name, ['controller' => 'Authors', 'action' => 'view', $kuote->author->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($kuote->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($kuote->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($kuote->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($kuote->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted At') ?></th>
                    <td><?= h($kuote->deleted_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('By Admin') ?></th>
                    <td><?= $kuote->by_admin ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Kuote') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kuote->kuote)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Photo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kuote->photo)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
