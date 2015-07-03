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

namespace LightStrap\View\Helper;

use Cake\View\Helper\FormHelper;
use Bootstrap3\View\Helper\BootstrapFormHelper;

class LightStrapFormHelper extends BootstrapFormHelper {

	public $helpers = [
		'Html', 
		'Url',
		'bHtml' => [
			'className' => 'Bootstrap3.BootstrapHtml'
		]
	] ;


	public function input($fieldName, array $options = array()) {

		$options = $this->_parseOptions($fieldName, $options);
		
		if(!isset($options['jsOptions'])){
			$jsOptions = '{}';
		} else {
			$jsOptions = json_encode($options['jsOptions'], true);
			unset($options['jsOptions']);
		}
		
		switch($options['type']) {

			case 'select2':
				$options['type'] = 'select';
				$options['class'] = 'ls-select2-'.$fieldName;
				echo $this->Html->script('LightStrap.select2');
				echo $this->Html->css('LightStrap.select2');
				echo '$(document).ready(function() { $(".'.$options['class'].'").select2('.($jsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'editor':
				$options['type'] = 'textarea';
				$options['class'] = 'ls-summernote-'.$fieldName;
				echo $this->Html->script('LightStrap.summernote');
				echo $this->Html->css('LightStrap.summernote');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").summernote('.($jsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'datepicker':
				$options['type'] = 'text';
				$options['class'] = 'ls-datepicker-'.$fieldName;
				echo $this->Html->script('LightStrap.datepicker');
				echo $this->Html->css('LightStrap.datepicker');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").datepicker('.($jsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'colorpicker':
				$options['type'] = 'text';
				$options['class'] = 'ls-colorpicker-'.$fieldName;
				echo $this->Html->script('LightStrap.colorpicker');
				echo $this->Html->css('LightStrap.colorpicker');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").colorpicker('.($jsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'toggle':
				$options['type'] = 'checkbox';
				$options['class'] = 'ls-toggle-'.$fieldName;
				$options['data-toggle'] = 'toggle';
				echo $this->Html->script('LightStrap.toggle');
				echo $this->Html->css('LightStrap.toggle');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").bootstrapToggle('.($jsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'touchspin':
				$options['type'] = 'text';
				$options['class'] = 'ls-touchspin-'.$fieldName;
				echo $this->Html->script('LightStrap.touchspin');
				echo $this->Html->css('LightStrap.touchspin');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").TouchSpin('.($jsOptions).'); });';
				$this->Html->scriptEnd();
			break;
		}

		return parent::input($fieldName, $options) ;
	}


}

