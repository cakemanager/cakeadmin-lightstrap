# LightStrap Theme for CakeAdmin

> Note: This is a non-stable plugin for CakePHP 3.x at this time. It is currently under development and should be considered experimental.

## Requisites

[Composer](https://getcomposer.org/)
```sh 
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```

[Bower](http://bower.io/)
```sh 
$ npm install -g bower
```


## Installation

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


For download the bower requirements
```
$ cd plugins/LigthStrap
$ bower install
```


## Usage

[Configure CakeAdmin](https://github.com/cakemanager/cakeadmin-docs/blob/1.0/docs/general/configurations.md) to select LigthStrap Theme.
```php
Configure::write('CA.theme', 'LightStrap');
```


## CakeAdmin

The plugin is [CakeAdmin](https://github.com/cakemanager/cakephp-cakeadmin) compatible!
