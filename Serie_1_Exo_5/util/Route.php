<?php namespace Util;

use Util\View;

class Route
{
    public function __construct()
    {
        $namespace = "Controllers";
        $controller = "ContactController";
        $method = "listContacts";
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
        $view = new View();
        return $view->render('404');
    }
}