CREATE DATABASE IF NOT EXISTS centromedico;
USE centromedico;

CREATE TABLE medicos (
  idMedico INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  medIdentificacion CHAR(15) NOT NULL,
  medNombres VARCHAR(50) NOT NULL,
  medApellidos VARCHAR(50) NOT NULL,
  medEspecialidad VARCHAR(50) NOT NULL,
  medTelefono CHAR(15),
  medCorreo VARCHAR(50)
);

CREATE TABLE consultorios (
  idConsultorio INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  conNombre CHAR(15) NOT NULL
);

CREATE TABLE medicamentos (
  idMedicamento INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  mdcNombre VARCHAR(50) NOT NULL,
  mdcPresentacion VARCHAR(50),
  mdcConcentracion VARCHAR(30),
  mdcStock INT(11) DEFAULT 0
);
