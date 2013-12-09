<?php

// uncomment the following to define a path alias
// This is the main Web application configuration. Any writable
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Fetch Images',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    // application components
    'components' => array(
        // uncomment the following to enable URLs in path-format
        'fetchImages' => array(
            'class' => 'ext.Sintret.Sintret',
            'foursquare_client_key' => 'your foursquare key',
            'foursquare_client_secret' => 'your foursquare secret',
            'flickr_key' => 'your flickr key',
        ),
        'db' => array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=tourexplora', 'username' => 'root', 'password' => '',
            'charset' => 'utf8',
            'emulatePrepare' => true,
            //'enableProfiling' => true,
            //'enableParamLogging' => true,
        ),
        'urlManager' => array(
            'showScriptName' => false,
            'urlFormat' => 'path',
            'connectionID' => 'db',
            'rules' => array(
                'login' => 'site/login',
                'home' => 'site/index',
                'gii' => 'gii',
                'gii/<controller:[\w\-]+>' => 'gii/<controller>',
                'gii/<controller:[\w\-]+>/<action:\w+>' => 'gii/<controller>/<action>',
            ),
        ),
        // uncomment the following to use a MySQL database
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'defaultPageSize' => 50,
        'arrayPageSize' => array(50 => 50, 100 => 100, 500 => 500),
        'thumbWidth' => 200,
        'thumbHeight' => 200,
    ),
);
?>

