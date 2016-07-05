<?php
define('__ROOT__','./ROOT/' );
define('__APP__','./ROOT/app/');
define('__DEPENDENCIES__', './ROOT/dependencies/');

require __ROOT__.'Classloader.php';

Classloader::load(require __DEPENDENCIES__.'classmap.php');
Config::load(require __DEPENDENCIES__.'config.php');

App::setInstance(new Router([], Config::get('basepath')));

require __APP__.'routes.php';

App::run();