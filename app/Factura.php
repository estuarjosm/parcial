<?php 

namespace App;

date_default_timezone_set('America/Guatemala');

class Factura {
	protected $correlativoF;
	protected $nitEmpresa;
	protected $nitCliente;
	protected $codigoUsuario;
	protected $numeroDetalle;
	protected $fechaF;
	protected $totalF;
	
	public function setCorrelativoF($correlativoF){
		$this->correlativoF = $correlativoF;
		$this->fechaF = date('d-m-Y H:i:s');
	}
	public function setNitEmpresa($nitEmpresa){
		$this->nitEmpresa = $nitEmpresa;
	}
	public function setNitCliente($nitCliente){
		$this->nitCliente = $nitCliente;
	}
	public function setCodigoUsuario($codigoUsuario){
		$this->codigoUsuario = $codigoUsuario;
	}
	public function setNumeroDetalle($numeroDetalle){
		$this->numeroDetalle = $numeroDetalle;
	}
	public function setTotal($totalF){
		$this->totalF = $totalF;
	}
	
	public function getFactura(){

		$dfdatos = array(
			'Correlativo' => $this->correlativoF,
			'Nit Empresa' => $this->nitEmpresa,
			'Nit Cliente' => $this->nitCliente,
			'Codigo Usuario' => $this->codigoUsuario,
			'Numero Detalle' => $this->numeroDetalle,
			'Fecha' => $this->fechaF,
			'Total' => $this->totalF);			
		return json_encode($dfdatos);
	}	
}

?>