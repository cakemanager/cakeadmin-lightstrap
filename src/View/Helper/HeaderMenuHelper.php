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

use Cake\Routing\Router;
use Cake\View\Helper;
use Utils\View\Helper\MenuBuilderInterface;

/**
 * Menu helper
 *
 * This helper is a template to build up the main menu.
 * Thats the `main` area.
 *
 */
class HeaderMenuHelper extends Helper implements MenuBuilderInterface
{
    /**
     * Used helpers
     *
     * @var array
     */
    public $helpers = [
        'Html'
    ];

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * afterMenu
     *
     * Method after the menu has been build.
     *
     * @param array $menu The menu items.
     * @param array $options Options.
     * @return string
     */
    public function afterMenu($menu = [], $options = [])
    {
        return '</ul>';
    }

    /**
     * afterSubItem
     *
     * Method after a submenu item has been build.
     *
     * @param array $item The menu items.
     * @param array $options Options.
     * @return string
     */
    public function afterSubItem($item = [], $options = [])
    {
        return '</ul>';
    }

    /**
     * beforeMenu
     *
     * Method before the menu has been build.
     *
     * @param array $menu The menu items.
     * @param array $options Options.
     * @return string
     */
    public function beforeMenu($menu = [], $options = [])
    {
        return '<ul class="nav navbar-nav navbar-right">';
    }

    /**
     * afterSubItem
     *
     * Method before a submenu item has been build.
     *
     * @param array $item The menu items.
     * @param array $options Options.
     * @return string
     */
    public function beforeSubItem($item = [], $options = [])
    {
        return '<ul class="dropdown-menu">';
    }

    /**
     * item
     *
     * Method to build an menu item.
     *
     * @param array $item The menu item.
     * @param array $options Options.
     * @return string
     */
    public function item($item = [], $options = [])
    {
        return $this->Html->link($item['title'], $item['url'], [
            'class' => 'dropdown-toggle',
            'data-toggle' => 'dropdown',
            'aria-haspopup' => 'true',
            'aria-expanded' => 'false',
            ''
        ]);
    }

    /**
     * item
     *
     * Method to build an submenu item.
     *
     * @param array $item The menu item.
     * @param array $options Options.
     * @return string
     */
    public function subItem($item = [], $options = [])
    {
        $html = '<li>';
        $html .= $this->Html->link($item['title'], $item['url']);
        $html .= '</li>';

        return $html;
    }

    /**
     * beforeItem
     *
     * Method before an item has been build.
     *
     * @param array $item The menu item.
     * @param array $options Options.
     * @return string
     */
    public function beforeItem($item = [], $options = [])
    {
        return '<li class="dropdown">';
    }

    /**
     * afterItem
     *
     * Method after an item has been build.
     *
     * @param array $item The menu item.
     * @param array $options Options.
     * @return string
     */
    public function afterItem($item = [], $options = [])
    {
        return '</li>';
    }
}
