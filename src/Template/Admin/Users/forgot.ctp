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
$this->layout = 'ajax';
?>
<?= $this->Form->create() ?>

<div class="modal-header my-header-class">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4>Forgot password</h4>
</div>
<div class="modal-body">
	<div class="users form">

		<?= $this->Flash->render('auth') ?>
		<fieldset>
			<?= $this->Form->input('email') ?>
		</fieldset>
	</div>

</div>
<div class="modal-footer ">
	<?= $this->Html->link('Cancel', ['action' => 'forgot'], ['data-dismiss' => 'modal', 'class' => 'btn btn-default']); ?>
	<?= $this->Form->button(__('Request'), ['class' => 'btn btn-primary']); ?>
</div>
<?= $this->Form->end() ?>

