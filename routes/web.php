<?php

/**--------------------------
 * Configura a página inicial
 *---------------------------
 */

use Cocur\Slugify\Slugify;
use Cotesi\Helper\Data;
use Cotesi\Helper\Date;
use Cotesi\Model\Patrocinador;
use Cotesi\Model\Slide;

Flight::route('/', function() {

    $slides = new Slide();
    $event  = new Data();
    $slug   = new Slugify();
    $date   = new Date();
    $emps   = new Patrocinador();

    $data  = [
        'titulo'    => 'COTESI - Congresso de Tecnologia e Sistemas da Informação',
        'slides'    => $slides,
        'eventos'   => $event->get('eventos'),
        'emps'      => $emps,
        'slugify'   => $slug,
        'date'      => $date
    ];

    foreach ($data['eventos'] as $key => $value) {
        if ($key === key($data['eventos'])) {
            $data['eventos'][$key]->current = true;
        } else {
            $data['eventos'][$key]->current = false;
        }
    }
 
    Flight::render('header' , $data);
    Flight::render('home'   , $data);
    Flight::render('footer' , $data);
});

Flight::route('POST /webkook/clone', function() {
    require __DIR__ . '/../update/clone.php';
});