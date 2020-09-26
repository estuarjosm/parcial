<?php

use PHPUnit\Framework\TestCase;
use App\Usuario;

class UsuarioTest extends TestCase{

	public function test_ingreso_datosUsuario(){

		$uNombre = "Amanda Rodriguez";
		$uCorreo = "amanda@outlook.com";
		$uRol = 2;
		$uContra = "12345a";

		$usuario1 = new Usuario();
		$usuario1->setNombreU($uNombre);
		$usuario1->setCorreoU($uCorreo);
		$usuario1->setRolU($uRol);
		$usuario1->setContraU($uContra);
				
		$uformato = array(
			'Nombre' => $uNombre,
			'Correo' => $uCorreo,
			'Rol' => $uRol);
		
		$this->assertEquals($usuario1->getUsuario(), json_encode($uformato));

		echo "\nClase Usuario: Formato JSON Verificado = " . $usuario1->getUsuario();
		
		$this->assertTrue(password_verify($uContra, $usuario1->getPass()));

		echo "\nClase Usuario: Encriptado y desencriptado de contraseña con exito";
	}

}

?>