<?php

$root = dirname(ZEUS_PATH);
$application = $root.DS.'application';

return [

	'debug' => true,
	'default_timezone' => 'Asia/Shanghai',
	//REQUEST_URI、QUERY_STRING、PATH_INFO
	'uri_protocol' => 'REQUEST_URI',
	'xss_clean' => true,

    //application namespace
    'app_ns' => [
        'app' => $application,
    ],

    //router
    'router.default_controller_ns' => 'app',
    'router.404_override' => true,
    'router.default_controller' => 'Index',
    'router.default_controller_action' => 'Index',
    'router.rewrite' => [
        //'test/afadf/([\\w\\/]+)' => 'app\\controller\\Index@index#$1',
    ],

    //view
    'view.template_path' => $application.DS.'views',
    'view.template_extension' => ".htm",
    'view.template_lang_dir' => "",

    //log
    'log.path' => $root.DS.'logs',
    'log.level' => 0,

    //database
    'database.pdo.dsn' => 'mysql:host=localhost;dbname=t_my;charset=utf8',
    'database.pdo.user' => 'root',
    'database.pdo.pass' => '123456',
    'database.pdo.driver_options' => [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    ],
];