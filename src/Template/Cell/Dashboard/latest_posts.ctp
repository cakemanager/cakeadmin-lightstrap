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

$list = [];

foreach ($posts as $post): 
$time = new Time($post['pubDate']);
$description = 'Author: ' . $post['dc:creator'] . ' | ' . $time->timeAgoInWords();
$list[$post['title']] = ['url' => $post['link'], 'description' => $description];
endforeach;

echo $this->element('Dashboard/panel', [
	'title' => 'Latest Posts',
	'list' => $list,
	'footer' => __d('LightStrap', 'Read more at {0}', $this->Html->link('http://cakemanager.org','http://cakemanager.org', ['target' => '_blank'])). ' | '. $this->Html->link('Follow @CakeManager','https://twitter.com/CakeManager', ['target' => '_blank', 'class' => 'twitter-follow-button', 'data-show-count' => 'false'])
]);
