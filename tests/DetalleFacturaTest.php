<?php

use PHPUnit\Framework\TestCase;
use App\DetalleFactura;

class DetalleFacturaTest extends TestCase{

	public function test_ingreso_datosDF(){

		$dfNumero = 2;
		$dfCodigoProducto = 2;
		$dfCantidadProducto = 2;
		$dfPrecioProducto = 2000;
		$dfSubtotal = $dfCantidadProducto * $dfPrecioProducto;

		$detalle1 = new DetalleFactura();
		$detalle1->setNumeroDF($dfNumero);
		$detalle1->setCodigoProductoDF($dfCodigoProducto);
		$detalle1->setCantidadProductoDF($dfCantidadProducto);
		$detalle1->setPrecioProductoDF($dfPrecioProducto);

		$dfformato = array(
			'Numero' => $dfNumero,
			'Codigo Producto' => $dfCodigoProducto,
			'Cantidad Producto' => $dfCantidadProducto,
			'Precio Producto' => $dfPrecioProducto,
			'Subtotal' => $dfSubtotal);

	$this->assertEquals($detalle1->getDetalleFactura(), json_encode($dfformato));

	echo "\nClase Detalle Factura: Formato JSON Verificado = " . $detalle1->getDetalleFactura(); 

	}
}

?>