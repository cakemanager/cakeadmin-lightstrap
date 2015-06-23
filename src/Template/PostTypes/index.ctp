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

//debug($type);
$this->Html->addCrumb('Dashboard', ['action' => 'index', 'controller' => 'dashboard']);
$this->Html->addCrumb($type['alias'], ['action' => 'index', 'type' => $type['slug']]);
echo $this->Html->getCrumbList();
?>

<h3>
	<?= $type['name'] ?>
	<a class="btn btn-link" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		<i class="fa fa-filter"></i>
	</a>
	<?= $this->Html->link('New ' . Inflector::singularize($type['alias']), ['action' => 'add', 'type' => $type['slug']], ['class'=>'btn btn-primary pull-right']) ?>
</h3>

<div class="collapse" id="collapseExample">
	<div class="well">
		<?= ($searchFilters ? $this->Search->filterForm($searchFilters) : null) ?>
	</div>
</div>

<table class="table table-striped table-bordered table-hover table-condensed" cellpadding="0" cellspacing="0">
	<thead>
		<tr>

			<?php foreach ($type['tableColumns'] as $column => $options) : ?>
			<th><?= $this->Paginator->sort($column) ?></th>
			<?php endforeach; ?>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $item): ?>
		<tr>
			<?php foreach ($type['tableColumns'] as $column => $options) : ?>
			<td>
				<?= $item->get($column) ?>
			</td>
			<?php endforeach; ?>
			<td class="actions">
				<?= $this->Html->link(__('<i class="fa fa-search"></i>'), ['action' => 'view', 'type' => $type['slug'], $item->get('id')], ['escape' => false]) ?>
				<?= $this->Html->link(__('<i class="fa fa-pencil"></i>'), ['action' => 'edit', 'type' => $type['slug'], $item->get('id')], ['escape' => false]) ?>
				<?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', 'type' => $type['slug'], $item->get('id')], ['escape' => false,'confirm' => __('Are you sure you want to delete # {0}?', $item->get('id'))]) ?>
			</td>
		</tr>

		<?php endforeach; ?>
	</tbody>
</table>
<div class="paginator">
	<ul class="pagination">
		<?= $this->Paginator->prev('< ' . __('previous')); ?>
		<?= $this->Paginator->numbers(); ?>
		<?= $this->Paginator->next(__('next') . ' >'); ?>
	</ul>
	<p><?= $this->Paginator->counter(); ?></p>
</div>

<?php
//debug($data);
?>
