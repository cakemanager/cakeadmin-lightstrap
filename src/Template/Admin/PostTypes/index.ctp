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
use Cake\Utility\Hash;
use Cake\Utility\Inflector;

$this->Html->addCrumb(__d('LightStrap', 'Dashboard'), ['action' => 'index', 'controller' => 'dashboard']);
$this->Html->addCrumb($type['alias'], ['action' => 'index', 'type' => $type['slug']]);
echo $this->Html->getCrumbList();
?>

<h3>
	<?= $type['alias'] ?>
	<span data-toggle="collapse" href="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
		<?= $this->Html->link($this->Html->faIcon('filter'), '#collapseFilter', ['class' => 'btn btn-default btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => __d('LightStrap', 'Filter {0}', $type['alias']), 'escape' => false]) ?>
	</span>
	<?= $this->Html->link($this->Html->faIcon('plus'), ['action' => 'add', 'type' => $type['slug']], ['class' => 'btn btn-primary btn-sm pull-right', 'data-toggle' => 'tooltip', 'data-placement' => 'left', 'title' => __d('LightStrap', 'New {0}', $type['singularAlias']), 'escape' => false]) ?>
</h3>

<div class="collapse" id="collapseFilter" data-posttype="<?= $type['slug'] ?>">
	<div class="panel panel-default">
		<div class="panel-body">
			<?= ($searchFilters ? $this->Search->filterForm($searchFilters, ['class' => 'form-inline']) : null) ?>
		</div>
	</div>
</div>

<table class="table table-striped table-bordered table-hover table-condensed" cellpadding="0" cellspacing="0">
	<thead>
		<tr>

			<?php foreach ($type['tableColumns'] as $column => $options) : ?>
			<th><?= $this->Paginator->sort($column) ?></th>
			<?php endforeach; ?>
			<th class="actions"><?= __d('LightStrap', 'Actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $item): ?>
		<tr>
			<?php foreach ($type['tableColumns'] as $column => $options) : ?>
			<td>
				<?= $options['before'] ?>
				<?= Hash::get($item->toArray(), $options['get']) ?>
				<?= $options['after'] ?>
			</td>
			<?php endforeach; ?>
			<td class="actions">
				<?= $this->Html->link($this->Html->faIcon('search'), ['action' => 'view', 'type' => $type['slug'], $item->get('id')], ['class' => 'btn btn-xs btn-default', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => __d('LightStrap', 'View {0}', Inflector::singularize($type['alias'])), 'escape' => false]) ?>
				<?= $this->Html->link($this->Html->faIcon('pencil'), ['action' => 'edit', 'type' => $type['slug'], $item->get('id')], ['class' => 'btn btn-xs btn-primary', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => __d('LightStrap', 'Edit {0}', Inflector::singularize($type['alias'])), 'escape' => false]) ?>
				<?= $this->Form->postLink($this->Html->faIcon('trash'), ['action' => 'delete', 'type' => $type['slug'], $item->get('id')], ['class' => 'btn btn-xs btn-danger', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => __d('LightStrap', 'Delete {0}', Inflector::singularize($type['alias'])), 'escape' => false,'confirm' => __d('LightStrap', 'Are you sure you want to delete # {0}?', $item->get('id'))]) ?>
			</td>
		</tr>

		<?php endforeach; ?>
	</tbody>
</table>
<div class="paginator">
	<ul class="pagination">
		<?= $this->Paginator->prev('< ' . __d('LightStrap', 'previous')); ?>
		<?= $this->Paginator->numbers(); ?>
		<?= $this->Paginator->next(__d('LightStrap', 'next') . ' >'); ?>
	</ul>
	<p><?= $this->Paginator->counter(); ?></p>
</div>

<?php
//debug($data);
?>
