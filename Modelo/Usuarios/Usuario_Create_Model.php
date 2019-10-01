<?php
require_once("../../Clases/Login.php");

class Usuarios 
{	
	


	public function __construct() 
	{
        $this->$Ejecuta::EjecutaEscalar();//abro la cadena de conexion
    }

    

    private function setNames() 
    {
        return $this->$Ejecuta::query("SET NAMES 'utf8'");//con esto evitamos caracteres extraños
    }


    public function Obtener_Usuario()
    {
		self::setNames();
		try 
		{
			$login=new login();
			//$login=$this->GetId_usuario();
			//$login=$this->GetNombre();
			$login=$this->GetUsuario();	
			$login=$this->GetClave();	
			//$login=$this->GetTipo_Usuario();	
			//$login=$this->GetCondicion();

			$respuesta=[];

			$sql="SELECT usuario,clave,Tipo_Usuario,condicion FROM login WHERE usuario=:usuario and clave=:password and condicion=1 ";

			$query=$this->$Ejecuta::EjecutaEscalar()->prepare($sql);

			if($query->execute())
			{
				if($query->rowCount())
				{
					while($fila=$query->fetch(PDO::FETCH_ASSOC))
					{
						$respuesta[]=$fila;
						var_dump($respuesta);
					}
				}
			}

			if($respuesta=['success']|| $_SESSION['success'])
			{
				//return $_SESSION['success']="ok";
				echo $_SESSION['success']="ok";
			}
			else
			{
				//return $_SESSION['error']="Error";
				echo $_SESSION['error']="Error";
			}



		} 
		catch (Exception $e) 
		{
			echo "Error Consulta Usuarios_Create_Model --->  "+$e->getMessage();
		}

	}
	/**public function Insertar_Usuario()
    {
		self::setNames();
		try 
		{
			

		} 
		catch (Exception $e) 
		{
			echo "Error Consulta Mostrar_Usuarios  --->  "+$e->getMessage();
		}

	}**/

	public function __destruct()
    {
    	$this->$Ejecuta::EjecutaEscalar($link);
    	$this->$Ejecuta::cierraConexion();//cierro la cadena de conexion
    	exit();
    }


}

require_once("../../Modelo/Conexion.php");
//require_once("../../Modelo/Conexion.php");
$Ejecuta=new Conexion();
$Ejecuta::EjecutaEscalar();





?>