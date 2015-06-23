# LightStrap Theme for CakeAdmin

> Note: This is a non-stable plugin for CakePHP 3.x at this time. It is currently under development and should be 
considered experimental.

## Installation

You can install this plugin into your CakePHP application using composer.

The recommended way to install composer packages is:

    composer require cakemanager/cakeadmin-lightstrap:dev-master
    
Now load the plugin with the command:

    $ bin/cake plugin load -r -b LightStrap

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

[Configure CakeAdmin](http://cakemanager.org/docs/cakeadmin/1.0/general/configurations/#theming) to select the 
LightStrap Theme as used theme for the admin panel.

```php
    Configure::write('CA.theme', 'LightStrap');
```

## CakeAdmin

The plugin is [CakeAdmin](https://github.com/cakemanager/cakephp-cakeadmin) compatible!

## Get in touch

Get in touch with us via [Gitter](https://gitter.im/cakemanager/cakeadmin-lightstrap)!
