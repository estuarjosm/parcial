<?php

use PHPUnit\Framework\TestCase;
use App\DocumentoTributario;

class DocumentoTributarioTest extends TestCase{

	public function test_ingreso_datos_DT(){

		$dtTipo = "Factura";
		$dtAutorizacion = "F759C23-2777";
		$dtSerie = "F154";
		$dtNumero = 100;

		$docu1 = new DocumentoTributario();
		$docu1->setTipoDoc($dtTipo);
		$docu1->setAutorizacionDoc($dtAutorizacion);
		$docu1->setSerieDoc($dtSerie);
		$docu1->setNumeroDoc($dtNumero);

		$dtformato = array(
			'Tipo' => $dtTipo,
			'Autorizacion' => $dtAutorizacion,
			'Serie' => $dtSerie,
			'Numero' => $dtNumero);
		
		$this->assertEquals($docu1->getDocumentoTributario(), json_encode($dtformato));

		echo "\n Formato JSON Clase Documento Tributario = " . $docu1->getDocumentoTributario();
	}
}

?>