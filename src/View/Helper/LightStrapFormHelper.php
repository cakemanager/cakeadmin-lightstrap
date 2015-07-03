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
	];

	protected function _generateFieldClass($prefix, $fieldName){
		return $prefix . '-' . str_replace(['.'], '', $fieldName);
	}

	public function input($fieldName, array $options = array()) {

		$options = $this->_parseOptions($fieldName, $options);
		
		if(!isset($options['ls-options'])){
			$lsOptions = '{}';
		} else {
			$lsOptions = json_encode($options['ls-options'], true);
			unset($options['ls-options']);
		}
		
		switch($options['type']) {

			case 'ls-select':
				$options['type'] = 'select';
				$options['class'] = $this->_generateFieldClass('ls-select2', $fieldName);
				echo $this->Html->script('LightStrap.select2');
				echo $this->Html->css('LightStrap.select2');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").select2('.($lsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'ls-editor':
			case 'editor':
				$options['type'] = 'textarea';
				$options['class'] = $this->_generateFieldClass('ls-summernote', $fieldName);
				echo $this->Html->script('LightStrap.summernote');
				echo $this->Html->css('LightStrap.summernote');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").summernote('.($lsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'ls-date':
				$options['type'] = 'text';
				$options['class'] = $this->_generateFieldClass('ls-datepicker', $fieldName);
				echo $this->Html->script('LightStrap.datepicker');
				echo $this->Html->css('LightStrap.datepicker');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").datepicker('.($lsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'ls-color':
				$options['type'] = 'text';
				$options['class'] = $this->_generateFieldClass('ls-colorpicker', $fieldName);
				echo $this->Html->script('LightStrap.colorpicker');
				echo $this->Html->css('LightStrap.colorpicker');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").colorpicker('.($lsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'ls-toggle':
				$options['type'] = 'checkbox';
				$options['class'] = $this->_generateFieldClass('ls-toggle', $fieldName);
				$options['data-toggle'] = 'toggle';
				echo $this->Html->script('LightStrap.toggle');
				echo $this->Html->css('LightStrap.toggle');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").bootstrapToggle('.($lsOptions).'); });';
				$this->Html->scriptEnd();
			break;

			case 'ls-number':
				$options['type'] = 'text';
				$options['class'] = $this->_generateFieldClass('ls-touchspin', $fieldName);
				echo $this->Html->script('LightStrap.touchspin');
				echo $this->Html->css('LightStrap.touchspin');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".'.$options['class'].'").TouchSpin('.($lsOptions).'); });';
				$this->Html->scriptEnd();
			break;
			
			case 'ls-map':
				$options['type'] = 'text';
				$options['class'] = $this->_generateFieldClass('ls-locationpicker', $fieldName);
				$options['append'] = '<div class="div'.$options['class'].'" style="width: 500px; height: 400px;"></div>';
				echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=false&libraries=places');
				echo $this->Html->script('LightStrap.locationpicker');
				$this->Html->scriptStart(['block' => true]);
				echo '$(document).ready(function() { $(".div'.$options['class'].'").locationpicker('.($lsOptions).'); });';
				$this->Html->scriptEnd();
			break;
			
		}

		return parent::input($fieldName, $options) ;
	}


}

