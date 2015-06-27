<?php

$this->Html->addCrumb('Dashboard', ['action' => 'index', 'controller' => 'dashboard']);
$this->Html->addCrumb('Settings', ['action' => 'index', 'controller' => 'settings']);
//$this->Html->addCrumb($prefix, ['action' => 'index', $key]);
echo $this->Html->getCrumbList();
?>
<!--h3><?= $prefix ?></h3-->

<?= $this->Menu->menu('navbar', 'LightStrap.NavbarMenu') ?>
<div role="tabpanel" class="tab-pane">
	<div class="row">
		<div class="col-sm-12">
			<?php
	echo $this->Form->create();

foreach ($settings as $id => $setting) {

	echo $this->Form->input($id . '.id', [
		'type' => 'hidden',
		'value' => $setting->id,
	]);

	$name = explode('.', $setting->name);

	echo $this->Form->input($id . '.value', [
		'type' => (($setting->type) ? $setting->type : 'text'),
		'label' => ucfirst(end($name)) . (($setting->description) ? ' - ' . $setting->description : ''),
		'options' => (($setting->options) ? $setting->options : ''),
		'value' => (($setting->type === 'checkbox') ? 1 : $setting->value),
        'checked' => $setting->value,
	]);
}

echo $this->Form->button(__('Submit'));

echo $this->Form->end();
			?>
		</div>
	</div>
</div>