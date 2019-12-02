<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Login') ?></legend>
                <?php
                echo $this->Form->control('username');
                echo $this->Form->control('password');
                echo $this->Form->control('referer', [
                    'type' => 'hidden',
                    'value' => $this->getRequest()->getSession()->read('Login.Referer')
                ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Login')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
