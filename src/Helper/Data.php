<?php
namespace Cotesi\Helper;

class Data {

    public function get( $file, $ext = "json" ) {
        return json_decode(
            file_get_contents(DOC_ROOT . '/data/' . $file . '.' . $ext)
        );
    }

}