<?php

// This is the main Web application configuration. Any writable
// application properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'dzhugel.ru',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

        'modules'=>array(
            'app'=>array(),
        ),
    
        'preload'=>array('log'),
    
	// application components
	'components'=>array(
		'urlManager' => array(
                        'urlFormat' => 'path',
                        'showScriptName' => false,
                        'rules' => array(
                            'app/<controller:\w+>/<action:\w+>'=>'app/<controller>/<action>',                            
                        )
                ),
                'log'=>array(
                        'class'=>'CLogRouter',
                        'routes'=>array(
                                    array(
                                        'class'=>'CFileLogRoute',
                                        'levels'=>'error,warning',
                                        'categories'=>'system.*',
                                    ),                                    
                                )
                    ))
);