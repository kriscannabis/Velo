<?php
use Whoops;

define(DIRECTORY_SEPARATOR, '/');

/**
 * Class App
 */

class App
{
    public static $config;

    public static $router;

    public static $db;

    public static $kernel;

    public static $auth;
    /**
     *
     */

    public static function init()
    {
        spl_autoload_register(['static','loadClass']);
        static::bootstrap();
//        set_exception_handler(['App','handleException']);
    }

    /**
     *
     */
    public static function bootstrap()
    {

            static::$router = new app\Router();
            static::$kernel = new app\Kernel();
            static::$db = new app\Db();
            //var_dump(new app\Db());
    }

    /**
     * @param $className
     */
    public static function loadClass ($className)
    {
//        //загрузка моделей
        if (strpos($className, "Models") !== false) {
//            echo "Model!!!!!!!!!!!!";
            $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
            $className = str_replace('Controllers/Models', "/Models", $className);
//            var_dump($className);
            require_once "./"."/".$className.'.php';


        }else {
            $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
            require_once "./" . "/" . $className . '.php';
        }
    }

    /**
     * @param Throwable $e
     */
    public function handleException (Throwable $e)
    {
        $whoops = new Whoops\Run();
        $errorPage = new Whoops\Handler\PrettyPageHandler();
        $errorPage->setPageTitle("It's broken!"); // Set the page's title
        $whoops->pushHandler($errorPage);
        $whoops->register($e);

//
//        if($e instanceof \app\Exceptions\InvalidRouteException) {
//            echo static::$kernel->launchAction('Error', 'error404', [$e]);
//            //throw new RuntimeException($e);
//        }else{
//            echo static::$kernel->launchAction('Error', 'error500', [$e]);
//            //throw new RuntimeException($e);
//        }
    }

}