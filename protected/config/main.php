<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// Path alias to bootstrap component
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Bootstrapped TiME Control Beta',
    'theme' => 'bootstrap',
    'sourceLanguage' => 'en',
    'language' => 'en',
    // preloading 'log' component
    'preload' => array(
        'log',
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.AweCrud.components.*', // AweCrud components
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'ersgmbh',
            'generatorPaths' => array(
            	'ext.AweCrud.generators', // AweCrud generators
                'bootstrap.gii', //Bootstrap gii
            ),
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            //'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
		//  PostgreSQL database
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;dbname=timecontrol',
			'tablePrefix' => 'time_',
			'username' => 'cronos',
			'password' => 'ersgmbh',
			'charset' => 'utf8',
		),
        // 'db' => array(
//             'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
//         ),
        // uncomment the following to use a MySQL database
        /*
          'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=testdrive',
          'emulatePrepare' => true,
          'username' => 'root',
          'password' => '',
          'charset' => 'utf8',
          ),
         */
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        
        'messages' => array (
        	'extensionPaths' => array(
        		'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
        	),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
