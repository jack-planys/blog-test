<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * If you want to override the default configuration, add the keys you
 * want to change here, and assign new values to them.
 */

return array(
    'always_load' => array(
            'packages' => array(
            'orm',
            'auth',
        ),
    ),
       'whitelisted_classes' => array(
       'Fuel\\Core\\Response',
       'Fuel\\Core\\View',
       'Fuel\\Core\\ViewModel',
       'Fuel\Core\Validation',
       'Closure',
    ),
);
