<?php namespace Util;

use Util\View;
use Configuration\Config;

class Route
{
    public function __construct()
    {


        $url = explode('/', $_SERVER['REQUEST_URI']);
        $taille = count($url);

        $namespace = "Controllers";
        $controller = $url[$taille - 2];
        $method = $url[$taille - 1];

        $class = $namespace."\\".$controller;

        if (! class_exists($class)) {
            return $this->not_found();
        }

        if (! method_exists($class, $method)) {
            return $this->not_found();
        }

        $classInstance = new $class;

        call_user_func_array(array($classInstance, $method), $args=[]);
    }

    public function not_found()
    {

        $namespace = Config::$namespace;
        $controller = Config::$controller;
        $method = Config::$method;

        $class = $namespace."\\".$controller;

        $classInstance = new $class;

        call_user_func_array(array($classInstance, $method), $args=[]);

        /*$view = new View();
        return $view->render('404');*/
    }
}