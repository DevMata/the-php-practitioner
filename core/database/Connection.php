<?php


class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config["connection"] . ';dbname=' . $config["dbname"] . ';port=' . $config["port"], $config["username"], $config["password"],$config["options"]
            );
        } catch (PDOException $e) {
            echo $e;
            die('Could not connect');
        }
    }
}