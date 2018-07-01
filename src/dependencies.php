<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__.'\..\templates', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $basePath));

    return $view;
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};


ActiveRecord\Config::initialize(function ($cfg) {
    // $domain = parse_url($_SERVER['SERVER_NAME']);
    // $pathDatabase = '';
    // if ($domain['path'] == 'elektro.um.id') {
    //     $pathDatabase = 'mysql://root@localhost/iceeie17';
    // } else {
    //     $pathDatabase = 'mysql://iceeie:35vnqCKLumNFFdVr@localhost/iceeie17';
    // }

    $pathDatabase = 'mysql://root:m0krajbal@localhost/nemu';

    $cfg->set_model_directory('../models');
    $cfg->set_connections(array(
        'development' => $pathDatabase
        ));
});

// date_default_timezone_set('Asia/Jakarta');
ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';