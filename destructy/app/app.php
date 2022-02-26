<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
  'settings' => [
    'displayErrorDetails' => true
  ]
]);

$container = $app->getContainer();

//$container = new \Slim\Container;

$container['config'] = function($c){
  return new \Noodlehaus\Config('../app/config/config.php');
};

$container['view'] = function($c){
  $view = new \Slim\Views\Twig('../app/views');

  $view->addExtension(new \Slim\Views\TwigExtension(
    $c['router'],
    $c['config']->get('url')
  ));
  return $view;
};

$container['db'] = function($c){
  return new PDO('mysql:host=' . $c['config']->get('db.mysql.host') . ';port=3306;dbname=' . $c['config']->get('db.mysql.dbname'),
   $c['config']->get('db.mysql.user'),
   $c['config']->get('db.mysql.password')
 );
};

//$app = new \Slim\App($container);

require 'routes.php';
