<?php 

namespace App;

class DetalleFactura {
	protected $numeroDF;
	protected $codigoProductoDF;
	protected $cantidadProductoDF;
	protected $precioProductoDF;
	
	public function setNumeroDF($numeroDF){
		$this->numeroDF = $numeroDF;
	}
	public function setCodigoProductoDF($codigoProductoDF){
		$this->codigoProductoDF = $codigoProductoDF;
	}
	public function setCantidadProductoDF($cantidadProductoDF){
		$this->cantidadProductoDF = $cantidadProductoDF;
	}
	public function setPrecioProductoDF($precioProductoDF){
		$this->precioProductoDF = $precioProductoDF;
	}
	
	public function getDetalleFactura(){		
		$dfdatos = array(
			'Numero' => $this->numeroDF,
			'Codigo Producto' => $this->codigoProductoDF,
			'Cantidad Producto' => $this->cantidadProductoDF,
			'Precio Producto' => $this->precioProductoDF,
			'Subtotal' => $this->precioProductoDF*$this->cantidadProductoDF);			
		return json_encode($dfdatos);
	}	
}

?>

