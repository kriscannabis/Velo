<?php
namespace app;
//use Whoops;
//use Exception;
//use RuntimeException;

class Router

{

    public function resolve ()
    {
        $route = "";


            if (($pos = strpos($_SERVER['REQUEST_URI'], '?')) !== false) {
                $route = substr($_SERVER['REQUEST_URI'], 0, $pos);
            }
            //throw new RuntimeException(var_dump($route));
            $route = $_SERVER['REQUEST_URI'];
            $route = is_null($route) ? $_SERVER['REQUEST_URI'] : $route;
            $route = explode('/', $route);
            array_shift($route);
            $result[0] = array_shift($route);
            $result[1] = array_shift($route);
            $result[2] = $route;

            return $result;

    }

}