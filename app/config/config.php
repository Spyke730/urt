<?php
return new \Phalcon\Config(array(
    'database' => array(
        'adapter'	=>	'Mysql',
        'host'      =>  'localhost', 
        'username'	=>	'proyectamos',
        'password'	=>	'Q1W2E3R4T5Y6*',        
        'charset'   =>  'utf8',
        'dbname'	=>	'urt'
    ),
    'application' => array(
        'controllersDir'=>	APP_DIR . '/controllers/',
        'modelsDir'		=>	APP_DIR . '/models/',
        'formsDir'		=>	APP_DIR . '/forms/',
        'viewsDir'		=>	APP_DIR . '/views/',
        'libraryDir'	=>	APP_DIR . '/library/',
        'pluginsDir'	=>	APP_DIR . '/plugins/',
        'cacheDir'		=>	APP_DIR . '/cache/',
        'baseUri'		=>	'/',
        'publicUrl'     =>  'localhost',
        'cryptSalt'		=>	'eEAfR|_&G&f,+vU]:jFr!estadatsas!A&+71w1Ms9~8_4L!<@[N@DyaIP_2My|:+.u>/6m,$D'
    ),
    'mail' => array(
        'fromName'  => 'Encuesta de satisfacción URT',
        'fromEmail' => 'encuesta.satisfacción.2015@gmail.com',
        'smtp'      => array(
            'server'    => 'smtp.gmail.com',
            'port'      => 587,
            'security'  => 'tls',
            'username'  => 'encuesta.satisfacción.2015',
            'password'  => 'encusatisfaction2015'
        )
    )
));
