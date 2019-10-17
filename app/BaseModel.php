<?php
//namespace Models;
namespace App;

use App;

/**
 * Базовая модель
 */
class BaseModel extends \ActiveRecord\Model
{
    /* Имя таблицы в БД, данную переменную стоит переопределить в потомках,
если имя таблицы не совпадает с именем класса */
    static $table_name = 'tasks';

// Имя столбца с первичным ключем
    static $primary_key = 'id';

// Имя соединения используемого при подключении
    static $connection = 'production';

// Явное указание имени БД, при генерации SQL будет использоваться конструкция -  db.table_name
    static $db = 'test';

    /*
    * Можно определить собственные методы и свойства необходимые для работы всех моделей
    */

    public function __construct()
    {


        \ActiveRecord\Config::initialize(function($cfg)
        {
            $cfg->set_model_directory("/var/www/www-root/data/www/tophotels.ts3h.ru/basic/web/Models/");
            //file_put_contents("/var/www/www-root/data/logs/l.log",__DIR__."/Models/");
            //$cfg->set_model_directory(".");
            $cfg->set_connections(
                array(
                    //'development' => 'mysql://username:password@localhost/development_database_name',
                    //'test' => 'mysql://username:password@localhost/test_database_name',
                    'production' => 'mysql://root:fuj4nkh5@localhost/test'
                )
            );
        });


    }


}