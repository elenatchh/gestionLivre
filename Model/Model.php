<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
abstract class Model{
    private static $pdo;

    private static function setBdd(){
        self::$pdo = new PDO('mysql:host=localhost;dbname=biblio_mvc','root','root',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));;
    }

    protected function getBdd(){
        self::setBdd();
        return self::$pdo;
    }
}
?>