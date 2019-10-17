<?php
/**
 * Базовый контроллер отвечает за рендер шаблонов
 */
namespace app;

use App;

class Controller
{

    public $layoutFile = 'Views/Layout.php';

    public function renderLayout ($body)
    {

        ob_start();
        require __DIR__."/..".'/'.'Views'.'/'.'Layout'.'/'."Layout.php";
        return ob_get_clean();

    }

    public function render ($viewName, array $params = [])
    {

        $viewFile = __DIR__."/../".'Views'."/".$viewName.'.php';
        extract($params);
        ob_start();
        require $viewFile;
        $body = ob_get_clean();
        ob_end_clean();
        //не работающая в php7 функция с использованием констант вывод без шаблона починю позже для апи методов
        //if (defined(NO_LAYOUT)){
        //    return $body;
       // }
        return $this->renderLayout($body);

    }

}