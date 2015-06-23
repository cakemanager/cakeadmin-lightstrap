<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('New Password') ?></legend>
        <?= $this->Form->input('new_password', ['type' => 'password', 'value' => '']) ?>
        <?= $this->Form->input('confirm_password', ['type' => 'password', 'value' => '']) ?>
    </fieldset>
    <?= $this->Form->button(__('Save')); ?>
    <?= $this->Form->end() ?>
</div>
