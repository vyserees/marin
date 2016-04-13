<?php
/**
 * Created by PhpStorm.
 * User: vlada
 * Date: 13.4.16.
 * Time: 08.22
 */

define('MVC_PATH', dirname(__FILE__));
define('APP_PATH', MVC_PATH . '/core/');

require_once APP_PATH . 'config/config.php';
require_once APP_PATH . 'config/db.php';
date_default_timezone_set(APP_TIMEZONE);
function class_autoloader($class_name)
{
    $name = strtolower($class_name);
    $possible_locations = array(
        'core/helpers/auth.php',
        'core/helpers/email.php',
        'core/helpers/paypal.php',
        'core/helpers/phpmailer.php',
        'core/helpers/pop3.php',
        'core/helpers/query.php',
        'core/helpers/smtp.php',
        'core/helpers/tables.php'
    );
    foreach ($possible_locations as $location) {
        if (file_exists($location)) {
            require_once $location;
            return TRUE;
        }
    }
}
spl_autoload_register('class_autoloader');
require_once APP_PATH.'functions.php';