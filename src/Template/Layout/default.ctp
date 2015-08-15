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
use Settings\Core\Setting;

$this->assign('title', $title);
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?> / <?= Setting::read('App.Name') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= (Configure::read('CA.LightStrap.subtheme') !== '') ? $this->Html->css('LightStrap.themes/' . strtolower(Configure::read('CA.LightStrap.subtheme')) . '/bootstrap.min.css') : $this->Html->css('LightStrap.bootstrap.min.css'); ?>
    <?= $this->Html->css('LightStrap.font-awesome.min.css') ?>
    <?= $this->Html->css('LightStrap.main') ?>
    <?= $this->Html->script('LightStrap.jquery.min.js') ?>
    <?= $this->Html->script('LightStrap.bootstrap.min.js') ?>
    <?= $this->Html->script('LightStrap.main.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>

    </header>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="navbar-brand" href="#"><?= $this->Html->image('LightStrap.cakemanager-ico.png'); ?> <?= Setting::read('App.Name') ?></a>
                </li>
                <?= $this->Menu->menu('main', 'CakeAdmin.MainMenu') ?>
            </ul>
        </div>
        <div class="page-content-wrapper">

            <nav class="navbar <?= (Configure::read('CA.LightStrap.navbar') !== '') ? Configure::read('CA.LightStrap.navbar') : 'navbar-inverse' ?> navbar-static-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?= $this->Menu->menu('headerLeft', 'LightStrap.HeaderMenu') ?>
                </div>
            </nav>
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>
