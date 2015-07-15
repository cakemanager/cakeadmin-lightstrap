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
<?php foreach ($notifications as $notification): ?>
    <ul>
        <li>
            <?php if ($notification->unread): echo '<b>'; endif; ?>
            <?= h($notification->get('title')) ?>
            <?php if ($notification->unread): echo '</b>'; endif; ?>
            <ul>
                <li><?= h($notification->get('body')) ?></li>
                <li> <?= h($notification->get('created')->timeAgoInWords([
                        'accuracy' => ['month' => 'month'],
                        'end' => '1 year'
                    ])) ?></li>
            </ul>
        </li>
    </ul>
<?php endforeach ?>
