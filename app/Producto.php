<?php 

namespace App;

class Producto {
	protected $codigoPro;
	protected $nombrePro;
	protected $precioPro;
	protected $stockPro;

	public function setCodigoPro($codigoPro){
		$this->codigoPro = $codigoPro;
	}
	public function setNombrePro($nombrePro){
		$this->nombrePro = $nombrePro;
	}
	public function setPrecioPro($precioPro){
		$this->precioPro = $precioPro;
	}
	public function setStockPro($stockPro){
		$this->stockPro = $stockPro;
	}

	public function getProducto(){
		$datosPro = array(
			'Codigo' => $this->codigoPro,
			'Nombre' => $this->nombrePro,
			'Precio' => $this->precioPro,
			'Stock' => $this->stockPro);
		return json_encode($datosPro);
	}
}

?>