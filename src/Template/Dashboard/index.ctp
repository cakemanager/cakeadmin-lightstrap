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
$this->set('title', 'Dashboard');
?>
<div class="row">
	<div class="col-md-12">
		<div class="jumbotron">
			<?= $this->cell('LightStrap.Dashboard::welcome') ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<?= $this->cell('CakeAdmin.Dashboard::gettingStarted') ?>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<?= $this->cell('CakeAdmin.Dashboard::plugins'); ?>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<?= $this->cell('CakeAdmin.Dashboard::gettingHelp'); ?>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<?= $this->cell('CakeAdmin.Dashboard::latestPosts'); ?>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<?= $this->cell('CakeAdmin.Dashboard::aboutUs') ?>
			</div>
		</div>
	</div>
</div>

