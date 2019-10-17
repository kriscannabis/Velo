<?php

namespace Controllers;


//use \Models\Tasks;

class Taskapi extends \app\Controller
{

    public function index ()
    {
//        $tasks = new \Models\Tasks;
//        $tasks->user = 1;
//        $tasks->task = 'ddddd';
//        $tasks->save();

        header('Content-Type: text/html; charset=utf-8');
        $query = \Models\Tasks::find("all");
        $tasks = [];
        foreach ($query as $key=>$value){

            $tasks[] = $query[$key]->attributes();
        }


//            array_walk_recursive( $tasks, function(&$item) {
//                $item = utf8_encode($item);
//            });
//            return json_encode($tasks);

        return json_encode($tasks);
//        print_r(\Models\Tasks::first()->attributes());

    }

}