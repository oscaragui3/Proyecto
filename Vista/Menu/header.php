

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Farmacia Sana Sana </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
  <link rel="stylesheet" href="public/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="public/bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="public/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="public/dist/css/skins/_all-skins.min.css">
  <!--
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">-->

  <link rel="stylesheet" href="public/bower_components/morris.js/morris.css">
  
  <link rel="stylesheet" href="public/bower_components/jvectormap/jquery-jvectormap.css">

  <link rel="stylesheet" href="public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="public/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <link rel="stylesheet" href="public/css/font-awesome.css">

    <link rel="stylesheet" href="public/css/AdminLTE.min.css">

    <link rel="stylesheet" href="diseño/css/bootstrap.css">

    <link rel="stylesheet" href="diseño/css/jquery.dataTables.css">

    <link rel="stylesheet" href="public/css/_all-skins.min.css">
    
    <link rel="apple-touch-icon" href="public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="public/img/favicon.ico">

  </head>
  <body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>F</b>SS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Farmacia Sana Sana</b></span>
        </a>
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <?php
            
            if(isset($_POST['usuario']))
            {
                $usuario=$_POST['usuario'];
            
            }//fin del termino del IF
          ?>
          
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li><a><i class="icon-calendar icon-large"></i>
                <?php
                $Today = date('y:m:d',time());
                $new=date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
              </a></li><!--Fin del termino mostrar la fecha actual del Equipo-->            


              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 10 Notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
 
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <?php

                  $conn=null;
                  $host='localhost';
                  $user='root';
                  $pwd='';
                  $db='farmacia';
                  require_once("../Conexion/conexion.php");
                  try
                  {

                    $success='Conexion Exitosa !!!! ';
                    $conn=new PDO ('mysql:host='.$host.';dbname='.$db,$user,$pwd);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sql="SELECT * FROM login ";
                    $stmt=$conn->prepare($sql);
                    $stmt->execute();
                    foreach($stmt as $fila)
                    {
                     
                    }

                  } catch (PDOException $e)
                  {
                      $error='Base Datos Desconocida !!!! ';
                      $_SESSION['error']='Base Datos Desconocida !!!! ';
                      echo "<script type='text/javascript'>window.location='404.php';</script>";
                      //echo '<p>Error al Conectar a la base de datos</p>';
                      
                  }
                  ?>
                  <span class="hidden-xs"><?php echo $fila["cargo"]; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      www.FarmaciasSanaSana.com
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li>
              <a href="#">
                <i class="fa fa-tasks"></i> <span>Escritorio</span>
              </a>
            </li>            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Almacén</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="articulo.php"><i class="fa fa-circle-o"></i>Añadir Artículos</a></li>
                <li><a href="categoria.php"><i class="fa fa-circle-o"></i>Añadir Categorías</a></li>
                <li><a href="EditarArticulos.php"><i class="fa fa-circle-o"></i>Editar Artículos</a></li>
                <li><a href="EditarCategoria.php"><i class="fa fa-circle-o"></i>Editar Categoria</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ingreso.php"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="proveedor.php"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                <li><a href="ingreso.php"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="proveedor.php"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                <li><a href="ingreso.php"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="proveedor.php"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="cliente.php"><i class="fa fa-circle-o"></i>Añadir Clientes</a></li>
                <li><a href="venta.php"><i class="fa fa-circle-o"></i> Añadir Ventas</a></li>
                <li><a href="EditarPersona.php"><i class="fa fa-circle-o"></i>Editar Clientes</a></li>
                <li><a href="cliente.php"><i class="fa fa-circle-o"></i>Editar Ventas </a></li>
              </ul>
            </li>                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li><a href="permiso.php"><i class="fa fa-circle-o"></i> Permisos</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i> <span>Consulta Compras</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="consultacompras.php"><i class="fa fa-circle-o"></i> Consulta Compras</a></li>                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i> <span>Consulta Ventas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="consultaventas.php"><i class="fa fa-circle-o"></i> Consulta Ventas</a></li>                
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>


                        
          </ul>
          <br>
          <form name="clock">
            <font color="black">Hora : <br></font>&nbsp;<input style="width: 150px;" type="submit" class="trans" name="face" value="">
          </form>
        </section>
        <!-- /.sidebar -->
      </aside>
      <script type="text/javascript">
        /*se realizara la hora actual del equipo*/
        var timerID=null;
        var timerRunning=false;
        function stopclock()
        {
          if(timerRunning)
          {
            clearTimeout(timerID);
            timerRunning=false;
          }
        }
        function showtime()
        {
          var now=new Date();
          var hours= now.getHours();
          var minutes=now.getMinutes();
          var seconds=now.getSeconds()
          var timeValue=""+((hours>12)? hours -12 :hours)
          if(timeValue=="0")timeValue=12;
          timeValue+=((minutes<10)?   ":0" : ":")+minutes
          timeValue+=((seconds < 10)? ":0" : ":" )+seconds
          timeValue+=(hours>=12)? " P.M" : " A.M"
          document.clock.face.value=timeValue;
          timerID=setTimeout("showtime()",1000);
          timerRunning=true;
        }
        function startclock()
        {
          stopclock();
          showtime();
        }
        window.onload=startclock;
      </script>
<?php
$usuario="";
$conn=null;
$host='localhost';
$user='root';
$pwd='';
$db='farmacia';
try
{

	$conn=new PDO ('mysql:host='.$host.';dbname='.$db,$user,$pwd);
	if($conn==true)
	{
		$success='Conexion Exitosa !!!! ';
		$_SESSION['success']='Base Datos Exitosa !!!! ';
        
	}
	

} catch (PDOException $e)
{
		$error='Base Datos Desconocida !!!! ';
		$_SESSION['error']='Base Datos Desconocida !!!! ';
		echo "<script type='text/javascript'>window.location='404.php';</script>";
		//echo '<p>Error al Conectar a la base de datos</p>';
		exit;
}
return $conn;


?>




