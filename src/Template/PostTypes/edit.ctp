<?php
use Cake\Utility\Hash;
use Cake\Utility\Inflector;

$this->Html->addCrumb('Dashboard', ['action' => 'index', 'controller' => 'dashboard']);
$this->Html->addCrumb($type['alias'], ['action' => 'index', 'type' => $type['slug']]);
$this->Html->addCrumb('Edit ' . Inflector::singularize($type['alias']), '');
echo $this->Html->getCrumbList();
?>
<?= $this->Form->create($entity); ?>
<fieldset>
    <legend><?= __('Edit ' . Inflector::singularize($type['alias'])) ?></legend>
    <?php
    foreach ($type['formFields'] as $field => $options) {
        if (substr($field, 0, 1) !== '_') {
            if (in_array($options['on'], ['both', 'edit'])) {
                echo $this->Form->input($field, $options);
            }
        }
    }
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
