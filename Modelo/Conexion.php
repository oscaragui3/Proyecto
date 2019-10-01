<?php


class Conexion
{
   private $bandera=False;


   
   public static function  EjecutaEscalar()
   {
     $host = "localhost";//Servidor
     $db= "farmaciasana";//Base de Datos
     $link = "mysql:host=$host;dbname=$db";
     $usuario = "root";//Usuario
     $pass = "";//Contraseña
     $link = new PDO($link,$usuario,$pass);

     try 
     {
         if($link==true)
         {
            $success='Conexion Exitosa !!!! ';
            echo "<p style='background-color:blue; display:none;'>'".$_SESSION['success']='Base Datos Exitosa !!!! '."</p>";
            echo"<script>window.alert('Conexion Exitosa');</script>";
         }
         return $link;
     } 
     catch (Exception $e) 
     {
         $error='Base Datos Desconocida !!!! ';
         echo "<p style='background-color:red; '>'".$_SESSION['error']='Base Datos Desconocida !!!! '."</p>";
         $_SESSION['error']='Base Datos Desconocida !!!! ';
         echo "<scrip>window.alert('Error Bd ');</script>".$e->getMessage();
         exit;
     }
     catch (PDOException $ex)
     {
        $error='Base Datos Desconocida !!!! ';
         echo "<p style='background-color:red; '>'".$_SESSION['error']='Base Datos Desconocida !!!! '."</p>";
         $_SESSION['error']='Base Datos Desconocida !!!! ';
         echo "<scrip>window.alert('Error Bd ');</script>".$e->getMessage();

     }
     finally
     {
        
        exit();
     }

     return $link;

    }


    public static function cierraConexion()//declaro una function de cierre de conexion
    {
        
        try 
        {
            $bandera=null;
            $this->link=null;
            if($bandera==False)
            {
                echo "<script>window.alert('Cerrado Exitosamente!!!!!');</script>";
                $this->link=close();
            }
        } 
        catch (PDOException $x) 
        {
            echo "Error al Cerrar Sistema --> '".$x->getMessage()."' ";
        }


    }






 }

?>