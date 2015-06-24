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
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create(null, ['class'=>'form-signin']) ?>
	<div class="logo-cm">
	<?= $this->Html->image('cakemanager.png'); ?>
	</div>
	<fieldset>
		<?= $this->Form->input(Configure::read('CA.fields.username'),['placeholder' => 'E-mail', 'label' => false]) ?>
		<?= $this->Form->input(Configure::read('CA.fields.password'), ['value' => '','placeholder' => 'Password', 'label' => false]) ?>
	</fieldset>
	<?= $this->Form->button(__('Login'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
	<?= $this->Html->link('Forgot password?', ['action' => 'forgot'],['class' => 'btn btn-block btn-link']); ?>

	<?= $this->Form->end() ?>
</div>
