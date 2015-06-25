# LightStrap Theme for CakeAdmin

> Note: This is a non-stable plugin for CakePHP 3.x at this time. It is currently under development and should be 
considered experimental.

## Installation

You can install this plugin into your CakePHP application using composer.

The recommended way to install composer packages is:

    composer require cakemanager/cakeadmin-lightstrap:dev-master
    
Now load the plugin with the command:

    $ bin/cake plugin load -r -b LightStrap

## Usage

No need to do stuff. Everything is automatically set by loading the plugin.

If you want to apply a Subtheme

	Configure::write('CA.subtheme', 'Cosmo');
	
Where Cosmo is a theme name from [Bootswatch](http://bootswatch.com/):

- Cerulean / A calm blue sky
- Cosmo / An ode to Metro
- Cyborg / Jet black and electric blue
- Darkly / Flatly in night mode
- Flatly / Flat and modern
- Journal / Crisp like a new sheet of paper
- Lumen / Light and shadow
- Paper / Material is the metaphor
- Readable / Optimized for legibility
- Sandstone / A touch of warmth
- Simplex / Mini and minimalist
- Slate / Shades of gunmetal gray
- Spacelab / Silvery and sleek
- Superhero / The brave and the blue
- United / Ubuntu orange and unique font
- Yeti / A friendly foundation

## CakeAdmin

The plugin is [CakeAdmin](https://github.com/cakemanager/cakephp-cakeadmin) compatible!

## Get in touch

Get in touch with us via [Gitter](https://gitter.im/cakemanager/cakeadmin-lightstrap)!
