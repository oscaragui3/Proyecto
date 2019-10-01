
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
	

	
  <title>Farmacia Sana Sana</title>	
  <!-- Tell the browser to be responsive to screen width 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">-->
	
  <!-- Bootstrap 3.3.7 -->
  <!--<link rel="stylesheet" href="Diseno/css/bootstrap.css">-->
  <link rel="stylesheet" href="Diseno/css/bootstrap.min.css">
  
  <!--	
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
	
	
</head>
<body class="hold-transition">
				<div class="col-sm-8 col-sm-offset-2">
			            <div class="row">
			                                <?php
												
			                                    if(isset($_SESSION['error']))
												{
			                                        echo
			                                        "
			                                        <div class='alert alert-default text-center'>
			                                            ".$_SESSION['error']."
			                                        </div>
			                                        ";
			                                        unset($_SESSION['error']);
			                                    }
			                                    if(isset($_SESSION['success'])){
			                                        $_SESSION['success'];
			                                        unset($_SESSION['success']);
			                                    }
			                                ?>
			            </div>
			    </div>
				<h3 style="text-align:center"></h3>

	<div class="container"></div>


<style>
	.footer 
	{
		
  		white-space: normal;
		width:100%; 
		text-align:center; 
		font-size:22px; 
		color: black;
	}
	
	.row
	{
		margin:0px;
		padding: 10px;
		text-align: center;
		white-space: normal;
		font: normal 13px arial, helvetica, sans-serif;
		box-sizing: border-box;
	}
	.hold-transition
	{
		color:black;
		text-align: center;
		border-radius:10px;1 solid;
		width:100%;
	}
	.input[type=text], .input[type=password] 
	{
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
	}
	.boton
	{
		  background-color: grey;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
	}

	
	@media only screen and (width:750px)
	{
		.footer .form-horizontal .p
		{

			font-size:26px;
            display: inline-block;
			
		}
		 
	}
	@media only screen and (min-width:890px)
	{
		.footer .form-horizontal .p
		{

			font-size:35px;
            display: inline-block;
			
		}
		 
	}
	
	@media only screen and (min-width:1320px) and (max-width: 980px)
	{
		.footer .form-horizontal .p .row
		{

			font-size:38px;
            display: inline-block;
			
		}
		 
	}
	
	
	

</style>	
<script>
	/**
			  $(document).ready(function(){
			$('#btnlogin').on('click',function(e){
				  e.preventDefault();
					
			  var usuario = $('#usuario').val();
			  var password = $('#password').val();
				
			  url="Controlador/Usuarios/ingresoUsuario.php";
			  $.ajax
			  ({
			  		type: "POST",
			  		url: url,
			  		data: {"password":password,'usuario':usuario},
			 		success: function(data)
			 {
					if (data=='ok') {
								swal(
									'Genial!',
									'Bienvenido al Sistema de Gestión',
									'success'
									  );
					$('.swal2-confirm').on('click',function(){
					  window.top.location="vista/menu.php";
					});

			} 
			else 
			{

				swal(
						' Upps! ',
						'Los datos son Incorrectos',
						'error');
				
						$('.swal2-confirm').on('click',function(){
						  $('#usuario').val('');
						  $('#password').val(''); 
						  $('#usuario').focus();
						});
			}
						
			}
				});     
				});


			  });
	
	**/
	
</script>

<div class="row" style="text-align: center;">
		
	<h3 style="text-align:center; font-size:25px; size=7&gt;">Panel Administracion</h3>
	<br>
	<div class="col-sm-8 col-sm-offset-2">

		<!--<form class="form-horizontal" action="Modelo/Usuarios/Usuario_Create_Model.php"  method="post">-->
	    <form class="form-horizontal" action="Controlador/Usuarios/ingresoUsuario.php"  method="post">
	    <br>
	   <div class="form-group">
		  
			<label class="col-sm-2 control-label" style="font-size:25px;">Usuario</label>
			<div class="col-sm-10">
					<input type="text" class="form-control" name="usuario" placeholder="Ingrese Usuario " >
			</div>
	   </div>
		<br>
      <div class="form-group">
			<label  class="col-sm-2 control-label" style="font-size:25px;">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="password" placeholder="Ingrese Password ">
			</div>
	   </div>
		
		<br>
        <!-- /.col -->
        <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
						<!--<input type="submit" class="boton"  value="Ingresar"/>-->
					<input type="submit" id="btnlogin" class="btn btn-default"  value="Ingresar"/>
				</div>
		</div>
        <!-- /.col -->
      </form>	
	</div><!--   -->
</div><!--Cierre de row-->
<div class="footer">
				|Se reserva derechos de autor  © 2020|
	</div>

<?php

require_once("Modelo/Conexion.php");
//require_once("../../Modelo/Conexion.php");
$Ejecuta=new Conexion();
$Ejecuta::EjecutaEscalar();

require_once("../../Modelo/Usuarios/Usuario_Create_Model.php");
require_once("../../Clases/Login.php")  ;
//require '../Modelo/Usuarios/Usuario_Create_Model.php';
//require '../Modelo/Conexion.php';

//require '../../Modelo/Usuarios/Usuario_Create_Model.php';
//require '../../Modelo/Conexion.php';

$login=new login();
$login=$this->setUsuario($_POST['usuario']);
$login=$this->setClave($_POST['password']);

$Ejecuta=new Conexion();
$Ejecuta::EjecutaEscalar();


$Valida=new Usuarios();
$Valida=($this->Ejecuta::EjecutaEscalar());
$Valida=$this->Obtener_Usuario($login);

include 'Vista/Menu/header.php';





?>
</body>
</html>

