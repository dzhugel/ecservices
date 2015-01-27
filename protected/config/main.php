<?php

// This is the main Web application configuration. Any writable
// application properties can be configured here.

date_default_timezone_set('Europe/Moscow');
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'ecservices.ru',

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
						'caseSensitive'=>false,
                        'rules' => array(
                            'app/<controller:\w+>/<action:\w+>'=>'app/<controller>/<action>',
							'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
							'/about'=>'/site/about',
							'/services'=>'/site/services',
							'/portfolio'=>'/site/portfolio'
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