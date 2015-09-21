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
use Cake\I18n\Time;

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Latest Posts</h3>
    </div>

    <div class="list-group">
        <?php foreach ($data as $post): $time = new Time($post['created']); ?>
            <a href="<?= Configure::read('CA.Domain') . $post['path'] ?>" target="_blank" class="list-group-item">
                <h5 class="list-group-item-heading"><?= $post['title'] ?></h5>

                <p class="list-group-item-text">Author: <?= $post['created_by']['email'] ?>
                    | <?= $time->timeAgoInWords(); ?></p>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="panel-footer">
        <?= __('Read more at {0}', $this->Html->link('http://cakemanager.org', 'http://cakemanager.org', ['target' => '_blank']))
        . ' | ' . $this->Html->link('Follow @CakeManager', 'https://twitter.com/CakeManager', [
            'target' => '_blank',
            'class' => 'twitter-follow-button',
            'data-show-count' => 'false'
        ]) ?>
    </div>

</div>

