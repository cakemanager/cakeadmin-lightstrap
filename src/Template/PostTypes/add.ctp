<?php
use Cake\Utility\Hash;
use Cake\Utility\Inflector;

$this->Html->addCrumb('Dashboard', ['action' => 'index', 'controller' => 'dashboard']);
$this->Html->addCrumb($type['alias'], ['action' => 'index', 'type' => $type['slug']]);
$this->Html->addCrumb('New ' . Inflector::singularize($type['alias']), '');
echo $this->Html->getCrumbList();
?>
<?= $this->Form->create($entity, $type['formFields']['_create']); ?>
<fieldset>
	<legend><?= __('Add ' . Inflector::singularize($type['alias'])) ?></legend>
	<?php
	foreach ($type['formFields'] as $field => $options) {
	if(strpos($field, '_', 0) === false) {
		if(in_array($options['on'], ['both', 'add'])) {
			echo $this->Form->input($field, $options);
		}
	}
}
	?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
