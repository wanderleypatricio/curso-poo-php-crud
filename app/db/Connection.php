<?php

class Connection {
    private static $instance;
    public static function getConnection(){
        if(!isset(self::$instance)){
            self::$instance = new PDO("mysql:dbname=crudphp;host=localhost:3306",
             "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 
                    "SET NAMES utf8"));
        }
        return self::$instance;
    }
}
