<?php
namespace Models;
class Tasks extends \ActiveRecord\Model {
    static $table_name = 'tasks';
    static $primary_key = 'id';
    static $id = 'id';
    static $user = 'user';
    static $task = 'task';
    static $status = 'status';

}