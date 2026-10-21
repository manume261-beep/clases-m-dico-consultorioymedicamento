<?php
require_once "conexionBaseDatos.php";
require_once "medico.php";
require_once "consultorio.php";
require_once "medicamento.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	switch ($_POST["entidad"]) {
		case "medico":
			$obj = new Medico();
			$obj->crearMedico($_POST["identificacion"], $_POST["nombres"], $_POST["apellidos"], $_POST["especialidad"], $_POST["telefono"], $_POST["correo"]);
			$ok = $obj->agregarMedico();
			break;
		case "consultorio":
			$obj = new Consultorio();
			$obj->crearConsultorio($_POST["nombre"]);
			$ok = $obj->agregarConsultorio();
			break;
		case "medicamento":
			$obj = new Medicamento();
			$obj->crearMedicamento($_POST["nombre"], $_POST["presentacion"], $_POST["concentracion"], $_POST["stock"]);
			$ok = $obj->agregarMedicamento();
			break;
	}
	echo $ok ? "Registro guardado correctamente." : "Error al guardar el registro.";
	echo "<br><a href='formularios.html'>Volver</a>";
}
?>
