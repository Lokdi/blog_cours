<?php
namespace models;

use PDO, PDOException;


abstract class Model
{
    private static $pdo;
    public static $instance;

    private static function setBdd()
    {
        try {
            self::$pdo = new PDO("mysql:host=localhost;dbname=blog_eval; charset=utf8","root","root", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);

        } catch(PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }

    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
            self::$instance++;
        }
        return self::$pdo;
    }
}
