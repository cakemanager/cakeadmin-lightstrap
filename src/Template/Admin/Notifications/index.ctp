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

/*$this->Html->addCrumb('Dashboard', ['action' => 'index', 'controller' => 'dashboard']);
$this->Html->addCrumb('Notifications', ['action' => 'index', 'controller' => 'notifications']);
echo $this->Html->getCrumbList();*/
?>

<h3>
	<?= __d('LightStrap', 'Notifications') ?>

</h3>
<div class="timeline">
	<!-- Line component -->
	<div class="line text-muted"></div>

	<!-- /Separator -->
	<?php foreach ($notifications as $notification): ?>
	<article class="panel panel-<?= ($notification->unread)? 'primary' : 'default' ?>">
		<div class="panel-heading icon">
			<i class="fa fa-envelope"></i>
		</div>
		<div class="panel-heading">
			<h2 class="panel-title"><?= h($notification->get('title')) ?></h2>
		</div>
		<div class="panel-body">
			<?= h($notification->get('body')) ?>
		</div>
		<div class="panel-footer">
			<small><?= h($notification->get('created')->timeAgoInWords(['accuracy' => ['month' => 'month'], 'end' => '1 year'])) ?></small>
		</div>
	</article>
	<?php endforeach ?>
</div>
