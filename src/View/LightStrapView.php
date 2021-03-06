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
namespace LightStrap\View;

use Cake\View\View;

/**
 * App View class
 */
class LightStrapView extends View
{

    /**
     * Initialization hook method.
     *
     * For e.g. use this method to load a helper for all views:
     * `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadHelper('Html', ['className' => 'Bootstrap.BootstrapHtml']);
        $this->loadHelper('Form', ['className' => 'Bootstrap.BootstrapForm']);
        $this->loadHelper('Paginator', ['className' => 'Bootstrap.BootstrapPaginator']);
        $this->loadHelper('Modal', ['className' => 'Bootstrap.BootstrapModal']);
    }
}
