<?php 

namespace App;

class Empresa {
	protected $nombreE;
	protected $nitE;
	protected $direccionE;
	protected $correoE;
	
	public function setNombreE($nombreE){
		$this->nombreE = $nombreE;
	}
	public function setNitE($nitE){
		$this->nitE = $nitE;
	}
	public function setDireccionE($direccionE){
		$this->direccionE = $direccionE;
	}
	public function setCorreoE($correoE){		
		$this->correoE = $correoE;		
	}

	public function getEmpresa(){
		$edatos = array(
			'Empresa' => $this->nombreE,
			'Nit' => $this->nitE,
			'Direccion' => $this->direccionE,
			'Correo' => $this->correoE);			
		return json_encode($edatos);
	}	
}

?>

