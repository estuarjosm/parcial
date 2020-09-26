<?php 

namespace App;

class Usuario {
	protected $nombreU;
	protected $correoU;
	protected $rolU;
	protected $contraU;
	protected $passU;

	
	public function setNombreU($nombreU){
		$this->nombreU = $nombreU;
	}
	public function setCorreoU($correoU){
		$this->correoU = $correoU;
	}
	public function setRolU($rolU){
		$this->rolU = $rolU;
	}
	public function setContraU($contraU){		
		
		$this->passU = password_hash($contraU, PASSWORD_BCRYPT);
		$this->contraU = $contraU;
		
	}
	public function getPass(){
		return $this->passU;
	}	


	public function getUsuario(){
		$udatos = array(
			'Nombre' => $this->nombreU,
			'Correo' => $this->correoU,
			'Rol' => $this->rolU);
		return json_encode($udatos);
	}	
	
}

?>