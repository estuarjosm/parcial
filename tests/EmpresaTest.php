<?php

use PHPUnit\Framework\TestCase;
use App\Empresa;

class EmpresaTest extends TestCase{

	public function test_ingreso_datosEmpresa(){

		$eNombre= "Corporativo S.A.";
		$eNit = "794568-8";
		$eDireccion = "4ta Avenida 6-14 zona 1 Escuintla";
		$eCorreo = "corporativo@corpo.com";
		
		$empresa1 = new Empresa();
		$empresa1->setNombreE($eNombre);
		$empresa1->setNitE($eNit);
		$empresa1->setDireccionE($eDireccion);
		$empresa1->setCorreoE($eCorreo);
	
		$eformato = array(
			'Empresa' => $eNombre,
			'Nit' => $eNit,
			'Direccion' => $eDireccion,
			'Correo' => $eCorreo);

	$this->assertEquals($empresa1->getEmpresa(), json_encode($eformato));

	echo "\nClase Empresa: Formato JSON Verificado = " . $empresa1->getEmpresa(); 

	}
}

?>