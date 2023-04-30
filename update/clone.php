<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_SERVER['HTTP_REFERER'];
    $date = date('Y-m-d H:i:s');

    $log_file = 'log.txt';
    $log_message = "{$date} - {$url}\n";
    file_put_contents($log_file, $log_message, FILE_APPEND);

    echo "Requisição POST recebida de: {$url}";
} 
?>