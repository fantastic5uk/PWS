<?php

// change the following paths if necessary
$yiit='F:\framework\yii-1114-f0fee9\yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
