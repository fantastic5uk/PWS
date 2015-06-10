<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>Yii::t('site', 'Police Welfare'),
	'theme'=>'fantastic5',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'generatorPaths'=>array(
                'application.gii',   // a path alias
            ),
			'password'=>'12345',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	'language'=>'si',
	'components'=>array(
	 'coreMessages'=>array(
        'basePath'=>null,
    ),
        'user' => array(
            'class' => 'WebUser',
            'allowAutoLogin' => true, // Enable cookie-based authentication
            'guestName' => 'guest',
            'loginUrl' => array('/site/login'),
        ),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
		'urlFormat'=>'path',
		'showScriptName'=>false,    //Add This Line
        //'caseSensitive'=>false,     //Add This Line
		  'rules'=>array(
		          '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
		  ),
		  'showScriptName'=>false,
		),

		//'db'=>array(
		//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		//),
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=policewelfare',
			'emulatePrepare' => true,
			'username' => 'police_dbusr',
			'password' => '6VoIWM6lBFrG',
			'charset' => 'utf8',
			//'enableProfiling'=>true,
            //'enableParamLogging'=>true,
		),
		/*	'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=PoliceWelfare',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
					//'levels'=>'trace, error, warning',
					//'categories'=>'system.db.*',
                    //'logFile'=>'sql.log',
				),
				// uncomment the following to show log messages on web pages
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
        'language' => 'si'
	),
);