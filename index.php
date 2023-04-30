<?php

/**------------------------------------------
 * Define a constante DOC_ROOT
 * ------------------------------------------
 */
define('DOC_ROOT', __DIR__);

/**------------------------------------------
 * Define a constante PUBLIC
 * ------------------------------------------
 */
define('PUB_DIR', DOC_ROOT . '/public/'); 

/**------------------------------------------
 * Importa as classes via composer autoload
 * ------------------------------------------
 */
require DOC_ROOT . '/vendor/autoload.php';

/**------------------------------------------
 * Importa as rotas do sistema
 * ------------------------------------------
 */
require DOC_ROOT . '/routes/web.php';

/**------------------------------------------
 * Define o diretório das views
 * ------------------------------------------
 */
Flight::set('flight.views.path', DOC_ROOT . '/views');

/**------------------------------------------
 * Inicializa o projeto
 * ------------------------------------------
 */
Flight::start();
