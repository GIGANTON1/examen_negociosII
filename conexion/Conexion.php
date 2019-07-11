<<?php


class Conexion
{

    private static $conexion = null;
    private static $pdo = null;

    private function __construct()
    {
        try {
            self::$pdo = new \PDO('mysql:hostname=127.0.0.1;dbname=negocios_examen',
                'root', 'orel199719');
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getConexion()
    {
        if (self::$pdo === null){
            new Conexion();
        }
        return self::$pdo;
    }

}