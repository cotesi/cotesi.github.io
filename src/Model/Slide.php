<?php
namespace Cotesi\Model;

use Cocur\Slugify\Slugify;
use Cotesi\Helper\Date;
use DateTime;
use Flight;

class Slide {
    public function getAll() {
        $eventos = file_get_contents( DOC_ROOT . '/data/eventos.json' );
        return json_decode($eventos);
    }

    public function render() {
        $slug    = new Slugify();
        $date    = new Date();
        $inicio  = new DateTime($this->getAll()[0]->data);
        $atual   = new DateTime();
        $eventos = $this->getAll();

        if($atual <= $inicio) {
            $eventos[0]->current = true;
        } else {
            foreach ($eventos as $key => $evento) {
                $data = new DateTime($evento->data);
                if($atual == $data) {
                    $eventos[$key]->current = true;
                }
            }
        }        

        Flight::render('includes/slides', [
            'eventos'   => $eventos,
            'slugify'   => $slug,
            'date'      => $date
        ]);
    }
}