<?php 

namespace App;

class Persona {
	protected $nit;
	protected $nombre;
	protected $direccion;
	protected $correo;

	public function setNit($nit){
		$this->nit = $nit;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getPersona(){
		$datos = array(
			'Nit' => $this->nit,
			'Nombre' => $this->nombre,
			'Direccion' => $this->direccion,
			'Correo' => $this->correo);
		return json_encode($datos);
	}
}

?>