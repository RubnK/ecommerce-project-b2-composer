<?php

require_once __DIR__ . '/../controllers/MainController.php';

$router = new AltoRouter();

// Calcul automatique de la base path (en incluant /public)
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$router->setBasePath($basePath);

// Routes
$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/catalogue', 'MainController#catalogue', 'catalogue');
$router->map('GET', '/panier', 'MainController#panier', 'panier');
$router->map('GET', '/login', 'MainController#login', 'login');
$router->map('GET', '/signup', 'MainController#signup', 'signup');
$router->map('GET', '/SoCode', 'MainController#socode', 'socode');
$router->map('GET', '/SoManage', 'MainController#somanage', 'somanage');
$router->map('GET', '/SoDraw', 'MainController#sodraw', 'sodraw');
$router->map('GET', '/SoNote', 'MainController#sonote', 'sonote');

// Retourne l'objet router
return $router;
