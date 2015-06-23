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
use Cake\I18n\Time;
?>
<h4>Latest Posts</h4>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="<?= $post['link'] ?>" target="_blank"><?= $post['title'] ?></a>
            <ul>
                <?php $time = new Time($post['pubDate']); ?>
                <li><?= "Author: " . $post['dc:creator'] . " | " . $time->timeAgoInWords() ?></li>
            </ul>
        </li>

    <?php endforeach; ?>
</ul>
<hr>
Read more at <a href="http://cakemanager.org">cakemanager.org</a>.
<br><br>
<a href="https://twitter.com/CakeManager" target="_blank" class="twitter-follow-button" data-show-count="false">Follow @CakeManager</a>
<hr>
