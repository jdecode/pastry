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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kuote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kuote->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Kuotes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kuotes form content">
            <?= $this->Form->create($kuote) ?>
            <fieldset>
                <legend><?= __('Edit Kuote') ?></legend>
                <?php
                    echo $this->Form->control('kuote');
                    echo $this->Form->control('author_id', ['options' => $authors]);
                    echo $this->Form->control('status');
                    echo $this->Form->control('deleted_at', ['empty' => true]);
                    echo $this->Form->control('by_admin');
                    echo $this->Form->control('photo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
