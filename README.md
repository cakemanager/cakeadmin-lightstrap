# LightStrap Theme for CakeAdmin

> Note: This is a non-stable plugin for CakePHP 3.x at this time. It is currently under development and should be considered experimental.

## Installation

Install [CakePHP 3.x Helpers for Bootstrap 3](https://github.com/Holt59/cakephp3-bootstrap3-helpers)
```sh
composer require holt59/cakephp3-bootstrap3-helpers:dev-master
```


Use the following code in your `config/bootstrap.php` 
```php
Plugin::load('LightStrap', ['bootstrap' => true, 'routes' => false]);
```


Use the following code in your `src/View/AppView.php` 
```php
public function initialize()
{
	$this->loadHelper('Html', ['className' => 'Bootstrap3.BootstrapHtml']);
	$this->loadHelper('Form', ['className' => 'Bootstrap3.BootstrapForm']);
	$this->loadHelper('Paginator', ['className' => 'Bootstrap3.BootstrapPaginator']);
	$this->loadHelper('Modal', ['className' => 'Bootstrap3.BootstrapModal']);
}
```

## Usage

[Configure CakeAdmin](https://github.com/cakemanager/cakeadmin-docs/blob/1.0/docs/general/configurations.md) to select LightStrap Theme.
```php
Configure::write('CA.theme', 'LightStrap');
```


## CakeAdmin

The plugin is [CakeAdmin](https://github.com/cakemanager/cakephp-cakeadmin) compatible!
