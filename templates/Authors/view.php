<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author $author
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Author'), ['action' => 'edit', $author->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Author'), ['action' => 'delete', $author->id], ['confirm' => __('Are you sure you want to delete # {0}?', $author->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Authors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Author'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="authors view content">
            <h3><?= h($author->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($author->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($author->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($author->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($author->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($author->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted At') ?></th>
                    <td><?= h($author->deleted_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Bio') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($author->bio)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Photo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($author->photo)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Kuotes') ?></h4>
                <?php if (!empty($author->kuotes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Kuote') ?></th>
                            <th><?= __('Author Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('By Admin') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($author->kuotes as $kuotes) : ?>
                        <tr>
                            <td><?= h($kuotes->id) ?></td>
                            <td><?= h($kuotes->kuote) ?></td>
                            <td><?= h($kuotes->author_id) ?></td>
                            <td><?= h($kuotes->status) ?></td>
                            <td><?= h($kuotes->created) ?></td>
                            <td><?= h($kuotes->modified) ?></td>
                            <td><?= h($kuotes->deleted_at) ?></td>
                            <td><?= h($kuotes->by_admin) ?></td>
                            <td><?= h($kuotes->photo) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Kuotes', 'action' => 'view', $kuotes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Kuotes', 'action' => 'edit', $kuotes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Kuotes', 'action' => 'delete', $kuotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kuotes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
