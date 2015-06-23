<?php
use Cake\Routing\Router;

Router::plugin('cakeadmin-lightstrap', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
