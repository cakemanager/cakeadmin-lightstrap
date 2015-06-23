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
?>
<h4>Getting Started</h4>
<ul>
    <?php foreach ($list as $title => $item): ?>

        <li>
            <a href="<?= $item['url'] ?>" target="_blank"><?= $title ?></a>
            <ul>
                <li><?= $item['description'] ?></li>
            </ul>
        </li>

    <?php endforeach; ?>
</ul>
<hr>
