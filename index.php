<?php

defined('YII_DEBUG') or define('YII_DEBUG',false);

// include Yii bootstrap file
require_once(dirname(__FILE__).'/framework/yii.php');

$config=dirname(__FILE__).'/protected/config/main.php';

// create a Web application instance and run
Yii::createWebApplication($config)->run();