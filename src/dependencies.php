<?php
use Assetic\AssetManager;
//use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;

use Assetic\Factory\AssetFactory;
use Assetic\Extension\Twig\AsseticExtension;

// DIC configuration

$container = $app->getContainer();

// view renderer PHP-view
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// view Twig-view
$container['view'] = function ($c) {
    $settings = $c->get('settings')['render'];
    $view = new \Slim\Views\Twig($settings['template_path'], [
        'cache' => $settings['template_cache'],
        'cache' => false,
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));

    //adding extension for assets manager
    //$am = new AssetManager();
    //$am->set('jquery', new FileAsset('/path/to/jquery.js'));
    //$am->set('base_css', new GlobAsset('../../app/templates/user/*'));

    //$factory = new AssetFactory('../../app/templates/user');
    //$factory->setDebug(true);
    //$view->addExtension(new AsseticExtension($factory));

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
