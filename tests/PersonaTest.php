<?php

use PHPUnit\Framework\TestCase;
use App\Persona;

class PersonaTest extends TestCase{

	public function test_ingreso_datosPersona(){

		$pNit = "548765-7";
		$pNombre = "Miguel Diaz";
		$pDireccion = "4 calle 10-80, Escuintla";
		$pCorreo = "miguel@gmail.com";

		$persona1 = new Persona();
		$persona1->setNit($pNit);
		$persona1->setNombre($pNombre);
		$persona1->setDireccion($pDireccion);
		$persona1->setCorreo($pCorreo);

		$formato = array(
			'Nit' => $pNit,
			'Nombre' => $pNombre,
			'Direccion' => $pDireccion,
			'Correo' => $pCorreo);
		
		$this->assertEquals($persona1->getPersona(), json_encode($formato));

		echo "\nClase Persona: Formato JSON Verificado = " . $persona1->getPersona();
	}
}

?>