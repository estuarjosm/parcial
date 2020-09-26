<?php

use PHPUnit\Framework\TestCase;
use App\Producto;

class ProductoTest extends TestCase{

	public function test_ingreso_datosProductos(){

		$pCodigo = "1";
		$pNombre = "Television";
		$pPrecio = 3000;
		$pStock = 4;

		$producto1 = new Producto();
		$producto1->setCodigoPro($pCodigo);
		$producto1->setNombrePro($pNombre);
		$producto1->setPrecioPro($pPrecio);
		$producto1->setStockPro($pStock);

		$pformato = array(
			'Codigo' => $pCodigo,
			'Nombre' => $pNombre,
			'Precio' => $pPrecio,
			'Stock' => $pStock);

	$this->assertEquals($producto1->getProducto(), json_encode($pformato));
	}
}

?>