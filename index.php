<?php

require_once 'Cliente.php';
require_once 'conexion/Conexion.php';

if (!empty($_POST)) {
    $datos = [];
    $datos[] = $_POST['nombre_completo'] ?? '';
    $datos[] = $_POST['email'] ?? '';
    $client = new Cliente();
    $client::llenar($datos);
}
?>
<html>
<head>
    <title>Formulario de Informacion</title>
</head>
<body>
    <h1 style="text-align: center; font-size: 50px">Llenado de Datos a la Base de Datos</h1>
    <form action="#" method="post" style="margin-left: 500px">
        <label style="font-weight: bold; font-size: 30px">Nombre Completo</label>
        <br>
        <input type="text" id="nombre_completo" placeholder="Nombre Completo" style="padding-right: 500px">
        <br>
        <label style="font-weight: bold; font-size: 30px">Correo Electronico</label>
        <br>
        <input type="email" id="email"  placeholder="Email" style="padding-right: 500px">
        <br>
        <br>
        <input type="submit" value="Enviar Datos" style="font-weight: bold; font-size: 15px; margin-left: 250px">
    </form>
</body>
</html>