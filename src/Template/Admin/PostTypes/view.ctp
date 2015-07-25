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

$this->Html->addCrumb('Dashboard', ['action' => 'index', 'controller' => 'dashboard']);
$this->Html->addCrumb($type['alias'], ['action' => 'index', 'type' => $type['slug']]);
$this->Html->addCrumb('View ' . Inflector::singularize($type['alias']), '');
echo $this->Html->getCrumbList();
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?= Inflector::singularize($type['alias']) ?></h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class=" col-md-12"> 
				<table class="table table-view">
					<tbody>
						<?php foreach ($type['formFields'] as $field => $options) { ?>
						<?php if (substr($field, 0, 1) !== '_') { ?>
						<tr>
							<td><?php echo $field; ?></td>
							<td><?php echo $data[$field]; ?></td>
						</tr>
						<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


</div>
