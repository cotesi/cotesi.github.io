<?php
namespace Cotesi\Helper;

use DateTime;
use IntlDateFormatter;

class Date {

    public function format($date) {
        $dateStr = $date;
        $date = new DateTime($dateStr);
        $formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        return $formatter->format($date);
    }

}