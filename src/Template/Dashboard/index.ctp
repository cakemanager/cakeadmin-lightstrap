<?php
$this->set('title', 'Dashboard');
?>

<h3>Dashboard</h3>

<div class="row">
	<div class="col-md-12">
		<div class="well">
			<?= $this->cell('CakeAdmin.Dashboard::welcome') ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="well">
			<?= $this->cell('CakeAdmin.Dashboard::gettingStarted') ?>
		</div>
		<div class="well">
			<?= $this->cell('CakeAdmin.Dashboard::plugins'); ?>
		</div>
		<div class="well">
			<?= $this->cell('CakeAdmin.Dashboard::gettingHelp'); ?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="well">
			<?= $this->cell('CakeAdmin.Dashboard::latestPosts'); ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="well">
			<?= $this->cell('CakeAdmin.Dashboard::aboutUs') ?>
		</div>
	</div>
</div>
