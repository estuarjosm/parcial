<?php 

namespace App;

class DocumentoTributario {
	protected $tipoDoc;
	protected $autorizacionDoc;
	protected $serieDoc;
	protected $numeroDoc;

	public function setTipoDoc($tipoDoc){
		$this->tipoDoc = $tipoDoc;
	}
	public function setAutorizacionDoc($autorizacionDoc){
		$this->autorizacionDoc = $autorizacionDoc;
	}
	public function setSerieDoc($serieDoc){
		$this->serieDoc = $serieDoc;
	}
	public function setNumeroDoc($numeroDoc){
		$this->numeroDoc = $numeroDoc;
	}

	public function getDocumentoTributario(){
		$datosDoc = array(
			'Tipo' => $this->tipoDoc,
			'Autorizacion' => $this->autorizacionDoc,
			'Serie' => $this->serieDoc,
			'Numero' => $this->numeroDoc);
		return json_encode($datosDoc);
	}
}

?>
