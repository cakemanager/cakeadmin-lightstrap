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

if(!isset($class)) $class = 'default';
if(!isset($title)) $title = '';
if(!isset($footer)) $footer = '';
if(!isset($content)) $content = '';
if(!isset($list)) $list = [];
?>
<div class="panel panel-<?= $class ?>">
	<?php if(!empty($title)){ ?>
	<div class="panel-heading">
		<h3 class="panel-title"><?= $title ?></h3>
	</div>
	<?php } ?>

	<?php if(!empty($content)){ ?>
	<div class="panel-body">
		<?= $content ?>
	</div>
	<?php } ?>

	<?php if(!empty($list)){ ?>
	<div class="list-group">
		<?php foreach($list as $title => $item): ?>
		<a href="<?= isset($item['url']) ? $item['url'] : '#' ?>" target="_blank" class="list-group-item">
			<h5 class="list-group-item-heading"><?= $title ?></h5>
			<p class="list-group-item-text"><?= $item['description'] ?></p>
		</a>
		<?php endforeach; ?>
	</div>
	<?php } ?>

	<?php if(!empty($footer)){ ?>
	<div class="panel-footer"><?= $footer ?></div>
	<?php } ?>

</div>