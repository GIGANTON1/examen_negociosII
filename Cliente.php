<?php

require_once 'conexion/Conexion.php';

class Cliente
{

    public $nombre_completo;
    public $email;

    public static function llenar(array $datos)
    {
        $client = new Cliente();
        $client->setNombreCompleto($datos[0]);
        $client->setEmail($datos[1]);
        self::guardarDatos(Conexion::getConexion() ,$datos);
    }
    public static function guardarDatos(PDO $pdo, $datos)
    {

        try {
            $stms = $pdo->prepare("INSERT INTO cliente(nombre_completo, email)" .
                " VALUES(?,?)");
            $stms->bindValue(1, $datos[0]);
            $stms->bindValue(2, $datos[1]);
            $stms->execute();
            echo 'Guardado';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }




    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }


    public function setNombreCompleto($nombre_completo)
    {
        $this->nombre_completo = $nombre_completo;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }



}