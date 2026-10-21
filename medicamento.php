<?php
class Medicamento
{
	//Definición de Atributos
	private $nombre;
	private $presentacion;
	private $concentracion;
	private $stock;
	private $Conexion;


	//Método Constructor
	public function crearMedicamento($nombre,$presentacion,$concentracion,$stock)
	{
		$this->nombre=$nombre;
		$this->presentacion=$presentacion;
		$this->concentracion=$concentracion;
		$this->stock=$stock;
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

	public function setPresentacion($presentacion)
	{
		$this->presentacion=$presentacion;
	}

	public function getPresentacion()
	{
		return ($this->presentacion);
	}

	public function setConcentracion($concentracion)
	{
		$this->concentracion=$concentracion;
	}

	public function getConcentracion()
	{
		return ($this->concentracion);
	}

	public function setStock($stock)
	{
		$this->stock=$stock;
	}

	public function getStock()
	{
		return ($this->stock);
	}

	//Métodos Asociados al CRUD y Otros
	public function agregarMedicamento()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into medicamentos(mdcNombre,mdcPresentacion,mdcConcentracion,mdcStock)
			values ('$this->nombre','$this->presentacion','$this->concentracion','$this->stock')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function consultarMedicamento($nombre)
	{
		$this->Conexion=Conectarse();
		$sql="select * from medicamentos where mdcNombre='$nombre'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function actualizarMedicamento()
	{	
		$this->Conexion=Conectarse();
		$sql="update medicamentos set mdcNombre='$this->nombre',mdcPresentacion='$this->presentacion',mdcConcentracion='$this->concentracion',mdcStock='$this->stock' where idMedicamento = '$_POST[idMedicamento]'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function eliminarMedicamento($idMedicamento)
	{
		$this->Conexion=Conectarse();
		$sql="delete from medicamentos where idMedicamento='$idMedicamento'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function listarMedicamentos()
	{
		$this->Conexion=Conectarse();
		$sql="select * from medicamentos";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
}

?>
