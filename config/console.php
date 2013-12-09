<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Fetch Image Console Application',
    // application components
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'users' => array(
            'debug' => true
        ),
    ),
    'components' => array(
        // Extensions for grab image foursquare, instagrab, facebook, flickr
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
    // uncomment the following to use a MySQL database
    ),
);
?>