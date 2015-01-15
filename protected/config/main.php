<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SIM LPM',
    'theme'=>'adminlte',


	/* -------------------------------------------------------------------------
     * PRELOAD
     * preloading 'log' component
     * ------------------------------------------------------------------------- */
	'preload'=>array(
        'log',
    ),


	/* -------------------------------------------------------------------------
     * IMPORT
     * autoloading model and component classes
     * ------------------------------------------------------------------------- */
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.components.widgets.*',
        'application.helpers.*', // CArray is for image extension, check image 
	),


	/* -------------------------------------------------------------------------
     * MODULES
     * ------------------------------------------------------------------------- */
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

    
	/* -------------------------------------------------------------------------
     * COMPONENTS
     * application components
     * ------------------------------------------------------------------------- */
	'components'=>array(
        'clientScript'=>array(
            'coreScriptPosition'=>CClientScript::POS_END,
            //'defaultScriptPosition'=>CClientScript::POS_END,
            //'defaultScriptFilePosition'=>CClientScript::POS_END
        ),

        // =====================================================================
        // (EXTENSION) ImageMagick configuration
        'image'=>array(
            'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD',
            // ImageMagick setup path
            'params'=>array('directory'=>'/opt/local/bin'),
        ),

        // =====================================================================
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('//sign_in'),
		),

        // =====================================================================
		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

        // =====================================================================
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

        // =====================================================================
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

        // =====================================================================
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning, trace',
				),
				// uncomment the following to show log messages on web pages
				array(
					'class'=>'CWebLogRoute',
					'levels'=>'error, warning, info',
				),
			),
		),

	),

    
	/* -------------------------------------------------------------------------
     * PARAMS
     * application-level parameters that can be accessed
	 * using Yii::app()->params['paramName']
     * ------------------------------------------------------------------------- */
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
