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

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Useful Plugins from the CakeManager Team</h3>
    </div>

    <div class="list-group">
        <?php foreach ($data as $item): ?>
            <a href="<?= $item['github'] ?>" target="_blank" class="list-group-item">
                <h5 class="list-group-item-heading"><?= $item['name'] ?></h5>

                <p class="list-group-item-text"><?= $item['description'] ?></p>
            </a>
        <?php endforeach; ?>
    </div>

</div>
