<?php

namespace app;

use app;

class Kernel
{

    public $defaultControllerName = 'Home';

    public $defaultActionName = "index";

    public function launch()
    {

        list($controllerName, $actionName, $params) = App::$router->resolve();
        echo $this->launchAction($controllerName, $actionName, $params);

    }


    public function launchAction($controllerName, $actionName, $params)
    {

        $controllerName = empty($controllerName) ? $this->defaultControllerName : ucfirst($controllerName);
        if(!file_exists(__DIR__."/.."."/".'Controllers'."/".$controllerName.'.php')){
            //throw new \App\Exceptions\InvalidRouteException();
            throw new \RuntimeException('Не найден: '.__DIR__."/.."."/".'Controllers'."/".$controllerName.'.php');
        }
        require_once __DIR__."/.."."/".'Controllers'.'/'.$controllerName.'.php';
        if(!class_exists("\\Controllers\\".ucfirst($controllerName))){
//            throw new \App\Exceptions\InvalidRouteException();
//            throw new RuntimeException();
        }
        $controllerName = "\\Controllers\\".ucfirst($controllerName);
        $controller = new $controllerName;
        $actionName = empty($actionName) ? $this->defaultActionName : $actionName;
        if (!method_exists($controller, $actionName)){
//            throw new \App\Exceptions\InvalidRouteException();
            throw new RuntimeException();
        }
        return $controller->$actionName($params);

    }

}