<?php
/**
 * CakeManager (http://cakemanager.org)
 * Copyright (c) http://cakemanager.org
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) http://cakemanager.org
 * @link          http://cakemanager.org CakeManager Project
 * @since         1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Configure;

?>

<div class="wrapper">
    <?= $this->Form->create(null, ['class' => 'form-signin']) ?>
    <div class="logo-cm">
        <?= $this->Html->image('LightStrap.cakemanager.png'); ?>
    </div>
    <?= $this->Flash->render('auth') ?>
    <?= $this->Flash->render() ?>
    <fieldset>
        <?= $this->Form->input(Configure::read('CA.fields.username'), [
            'placeholder' => 'E-mail',
            'label' => false,
            'autofocus' => 'autofocus'
        ]) ?>
        <?= $this->Form->input(Configure::read('CA.fields.password'), [
            'value' => '',
            'placeholder' => 'Password',
            'label' => false
        ]) ?>
    </fieldset>
    <?= $this->Form->button(__d('LightStrap', 'Login'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
    <?= $this->Html->link('Forgot password?', ['action' => 'forgot'], ['data-toggle' => 'modal', 'data-target' => '#forgotPass', 'class' => 'btn btn-block btn-link']); ?>

    <?= $this->Form->end() ?>
    <?php
    $content = '<i class="fa fa-cog fa-spin"></i>';
    echo $this->Modal->create(['id' => 'forgotPass']);
    echo $this->Modal->body($content, ['class' => 'my-body-class']);
    echo $this->Modal->end();
    ?>
</div>

