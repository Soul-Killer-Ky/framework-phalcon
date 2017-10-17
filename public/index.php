<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17
 * Time: 11:23
 */

use Phalcon\Loader;
use Quan\System\System;

ignore_user_abort(true);
date_default_timezone_set('Asia/Chongqing');
define('APP_PATH', realpath(__DIR__. '/..') . '/');
define('APP_DEBUG', in_array(getenv('GAORE_DEBUG'), [1, 'On', 'on']) ? true : false );
define('APP_STARTTIME', microtime(true));
define('SYSTEM_PATH', APP_PATH. 'system/');
define('COMMON_PATH', APP_PATH. 'common/');
define('RUNTIME_PATH', APP_PATH. 'runtime/');
$loader = new Loader();
$loader->registerNamespaces(array('Quan\System' => SYSTEM_PATH));
$loader->register();
System::run();