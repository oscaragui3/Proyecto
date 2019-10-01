<!DOCTYPE html>
<html lang="es" id="FarmaciaSanaSana" class="no_js">
<head>
  
   <meta charset="utf-8">
  <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  <meta name="description" content="Farmacia Sana Sana " />
  <meta name="author" content=" FarmaciaSanaSana">
  <meta name="keywords" content="BibliotecaVirtual" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  

  
  <title>Farmacia_Sana_Sana</title> 

  <link rel="stylesheet" href="../../Diseno/css/bootstrap.min.css">
  

</head>
<body>
<?php

require_once("../../Modelo/Usuarios/Usuario_Create_Model.php");
require_once ("../../Modelo/Conexion.php");
require_once("../../Clases/Login.php")  ;
//require '../Modelo/Usuarios/Usuario_Create_Model.php';
//require '../Modelo/Conexion.php';

//require '../../Modelo/Usuarios/Usuario_Create_Model.php';
//require '../../Modelo/Conexion.php';

$login=new login();
$login=$this->GetUsuario($_POST['usuario']);
$login=$this->GetClave($_POST['password']);

$Ejecuta=new Conexion();
$Ejecuta::EjecutaEscalar();


$Valida=new Usuarios();
$Valida=($this->Ejecuta::EjecutaEscalar());
$Valida=$this->Obtener_Usuario($login);

include 'Vista/Menu/header.php';

?>
</body>
</html>