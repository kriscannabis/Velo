<?php

use RuntimeException;
use Whoops\Handler\JsonResponseHandler;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;
//use php-activerecord/php-activerecord;


require __DIR__ . '/app/App.php';
require './vendor/autoload.php';





$whoops = new \Whoops\Run();
$errorPage = new \Whoops\Handler\PrettyPageHandler();
$errorPage->setPageTitle("It's broken!"); // Set the page's title
$whoops->pushHandler($errorPage);
$whoops->register();




    (new App)->init();
    App::$kernel->launch();

require_once  __DIR__.'/vendor/php-activerecord/php-activerecord/ActiveRecord.php';

//
//$auth_factory = new \Aura\Auth\AuthFactory($_COOKIE);
//$auth = $auth_factory->newInstance();
//
//
//// the authentication status is currently anonymous
//echo $auth->getStatus(); // ANON
//
//// create the login service
//$login_service = $auth_factory->newLoginService();
//
//// use the service to force $auth to a logged-in state
//$username = 'boshag';
//$userdata = array(
//    'first_name' => 'Bolivar',
//    'last_name' => 'Shagnasty',
//    'email' => 'boshag@example.com',
//);
//$login_service->forceLogin($auth, $username, $userdata);
//
//// now the authentication status is valid
//echo $auth->getStatus(); // VALID
//


?>
