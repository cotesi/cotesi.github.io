<?php
namespace Cotesi\Model;

use Flight;

class Patrocinador {

    public function getAll() {
        $patrocinadores = file_get_contents( DOC_ROOT . '/data/patrocinadores.json' );
        return json_decode($patrocinadores);
    }

    public function render() {
        Flight::render('includes/patrocinadores', ['patrocinadores' => $this->getAll() ]);
    }


}