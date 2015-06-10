<?php
// Change the following settings if necessary
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

// change the following paths if necessary
$yii = dirname(__FILE__) . '/../framework/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';
//$yii='F:\framework\yii-1114-f0fee9\yii.php';
//$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
