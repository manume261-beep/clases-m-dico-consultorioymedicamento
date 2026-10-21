<?php
class Consultorio
{
	//Definición de Atributos
	private $nombre;
	private $Conexion;


	//Método Constructor
	public function crearConsultorio($nombre)
	{
		$this->nombre=$nombre;
	}

	//Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}

	public function getNombre()
	{
		return ($this->nombre);
	}

	//Métodos Asociados al CRUD y Otros
	public function agregarConsultorio()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into consultorios(conNombre)
			values ('$this->nombre')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function consultarConsultorio($nombre)
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios where conNombre='$nombre'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function actualizarConsultorio()
	{	
		$this->Conexion=Conectarse();
		$sql="update consultorios set conNombre='$this->nombre' where idConsultorio = '$_POST[idConsultorio]'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function eliminarConsultorio($idConsultorio)
	{
		$this->Conexion=Conectarse();
		$sql="delete from consultorios where idConsultorio='$idConsultorio'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function listarConsultorios()
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
}

?>
