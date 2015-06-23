<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Forgot password') ?></legend>
        <?= $this->Form->input('email') ?>
    </fieldset>
    <?= $this->Form->button(__('Request')); ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link('Login', ['action' => 'login']); ?>
</div>
