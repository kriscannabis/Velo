<?php
namespace app;


//class Tasks extends \ActiveRecord\Model { }
// initialize ActiveRecord

class Db{
    public function __construct()
    {
        \ActiveRecord\Config::initialize(function($cfg)
        {
            $cfg->set_model_directory(__DIR__.'/../Models/');
            $cfg->set_connections(array('development' => 'mysql://dev:fuj4nkh5@127.0.0.1/dev;charset=utf8'));
        });
    }
}


//print_r(Tasks::first()->attributes());