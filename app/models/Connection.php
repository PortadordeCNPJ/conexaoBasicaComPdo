<?php

namespace app\models;

use PDO;

class Connection
{
    public static function connect(){

        $config = require "./config.php";

        new PDO("mysql:host={$config['db']['host']}");
    }
}