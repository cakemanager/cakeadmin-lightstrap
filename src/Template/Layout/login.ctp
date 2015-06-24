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

$this->assign('title', $title);
?>
<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?= $this->fetch('title') ?>
		</title>
		<?= $this->Html->meta('icon') ?>
		<?= $this->Html->css('LightStrap.bootstrap.min.css') ?>
		<?= $this->Html->css('LightStrap.font-awesome.min.css') ?>
		<?= $this->Html->css('LightStrap.main') ?>
		<?= $this->Html->script('LightStrap.jquery.min.js') ?>
		<?= $this->Html->script('LightStrap.bootstrap.min.js') ?>
		<?= $this->Html->script('LightStrap.main.js') ?>
		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<?= $this->fetch('script') ?>
	</head>
	<body class="login">
		<div id="container" class="container">
			<div id="content">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<?= $this->Flash->render() ?>
						<?= $this->fetch('content') ?>
					</div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>
