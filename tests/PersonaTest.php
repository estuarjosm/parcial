<?php

use PHPUnit\Framework\TestCase;
use App\Persona;

class PersonaTest extends TestCase{

	public function test_ingreso_datosPersona(){

		$pNombre = "Miguel Diaz";
		$pDireccion = "4 calle 10-80, Escuintla";
		$pCorreo = "miguel@gmail.com";

		$persona = new Persona();
		$persona->setNombre($pNombre);
		$persona->setDireccion($pDireccion);
		$persona->setCorreo($pCorreo);

		$formato = array(
			'Nombre' => $pNombre,
			'Direccion' => $pDireccion,
			'Correo' => $pCorreo);
		
		$this->assertEquals($persona->getPersona(), json_encode($formato));
	}
}

?>