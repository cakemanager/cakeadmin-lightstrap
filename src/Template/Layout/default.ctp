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
		<?= (Configure::check('CA.subtheme')) ? $this->Html->css('LightStrap.themes/' . strtolower(Configure::read('CA.subtheme')) . '/bootstrap.min.css') : $this->Html->css('LightStrap.bootstrap.min.css'); ?>
		<?= $this->Html->css('LightStrap.font-awesome.min.css') ?>
		<?= $this->Html->css('LightStrap.main') ?>
		<?= $this->Html->script('LightStrap.jquery.min.js') ?>
		<?= $this->Html->script('LightStrap.bootstrap.min.js') ?>
		<?= $this->Html->script('LightStrap.main.js') ?>
		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<?= $this->fetch('script') ?>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><?= $this->Html->image('LightStrap.cakemanager-ico.png'); ?> CakeAdmin LightStrap</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav visible-xs">
							<?= $this->Menu->menu('main', 'CakeAdmin.MainMenu') ?>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->Html->faIcon('user') ?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?= $this->Menu->menu('headerLeft', 'CakeAdmin.MainMenu') ?>
								</ul>
							</li>
						</ul>
						<div class="nav-label">
							<span class="label label-primary"><a target="_blank" href="http://book.cakephp.org/3.0/">DOCS</a></span>
							<span class="label label-primary"><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<div id="container" class="container">
			<div id="content">

				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<ul class="nav nav-pills nav-stacked hidden-xs">
							<?= $this->Menu->menu('main', 'CakeAdmin.MainMenu') ?>
						</ul>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10">
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
