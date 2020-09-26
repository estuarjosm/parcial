<?php

use PHPUnit\Framework\TestCase;
use App\Factura;

date_default_timezone_set('America/Guatemala');

class FacturaTest extends TestCase{

	public function test_ingreso_datosF(){

		$fCorrelativo = 2574;
		$fNitEmpresa = "789468-7";
		$fNitCliente = "889468-7";
		$fCodigoUsuario = 78978;
		$fNumeroDetalle = 78;
		$fTotal = 4000;
		$fFecha = date('d-m-Y H:i:s');

		$factura1 = new Factura();
		$factura1->setCorrelativoF($fCorrelativo);
		$factura1->setNitEmpresa($fNitEmpresa);
		$factura1->setNitCliente($fNitCliente);
		$factura1->setCodigoUsuario($fCodigoUsuario);
		$factura1->setNumeroDetalle($fNumeroDetalle);
		$factura1->setTotal($fTotal);

		$fformato = array(
			'Correlativo' => $fCorrelativo,
			'Nit Empresa' => $fNitEmpresa,
			'Nit Cliente' => $fNitCliente,
			'Codigo Usuario' => $fCodigoUsuario,
			'Numero Detalle' => $fNumeroDetalle,
			'Fecha' => $fFecha,
			'Total' => $fTotal);

	$this->assertEquals($factura1->getFactura(), json_encode($fformato));

	echo "\nClase Factura: Formato JSON Verificado = " . $factura1->getFactura(); 

	}
}

?>