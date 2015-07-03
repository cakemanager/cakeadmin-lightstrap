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

## Configuration

### Theme configurations

You can set the [Navbar](http://getbootstrap.com/components/#navbar) class:

	Configure::write('CA.LightStrap.navbar', 'navbar-inverse');

### Subtheme

You can apply a Subtheme from [Bootswatch](http://bootswatch.com/):

	Configure::write('CA.LightStrap.subtheme', 'Cosmo');
	
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

### LightStrapFormHelper (formFields types)

To use the new types you must define the [formFields](http://cakemanager.org/docs/cakeadmin/1.0/tutorials-and-examples/adding-posttypes/#formfields) type in [postType](http://cakemanager.org/docs/cakeadmin/1.0/tutorials-and-examples/adding-posttypes) and the settings of specific plugins in key `ls-options` as below:

```
public function postType() {
	return [
		'formFields' => [
			'id',
			'checkin_date' => ['type' => 'ls-date', 'ls-options' => ['format' => 'dd-mm-yyyy']],
		],
	];
}
```

All available field types so far:

- `ls-select` using [Select2](https://github.com/select2/select2-bootstrap-theme) ([demo](https://select2.github.io/examples.html), [options](https://select2.github.io/options.html))
- `ls-editor` using [Summernote](https://github.com/summernote/summernote) ([demo](http://summernote.org/#/example), [options](http://summernote.org/jsduck/#!/api/settings))
- `ls-date` using [bootstrap-datepicker](https://github.com/eternicode/bootstrap-datepicker) ([demo](http://eternicode.github.io/bootstrap-datepicker), [options](https://bootstrap-datepicker.readthedocs.org/en/latest/options.html))
- `ls-color` using [Bootstrap Colorpicker](https://github.com/mjolnic/bootstrap-colorpicker) ([demo](http://mjolnic.com/bootstrap-colorpicker), [options](http://mjolnic.com/bootstrap-colorpicker/))
- `ls-toggle` using [Bootstrap Toggle](https://github.com/minhur/bootstrap-toggle) ([demo](http://www.bootstraptoggle.com), [options](https://github.com/minhur/bootstrap-toggle/#options))
- `ls-number` using [Bootstrap TouchSpin](https://github.com/istvan-ujjmeszaros/bootstrap-touchspin) ([demo](http://www.virtuosoft.eu/code/bootstrap-touchspin), [options](http://www.virtuosoft.eu/code/bootstrap-touchspin))



## CakeAdmin

The plugin is [CakeAdmin](https://github.com/cakemanager/cakephp-cakeadmin) compatible!

## Get in touch

Get in touch with us via [Gitter](https://gitter.im/cakemanager/cakeadmin-lightstrap)!
