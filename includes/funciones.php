<?php

define('TEMPLATES_URL',__DIR__.'/templates');
define('FUNCIONES_URL',__DIR__.'funciones.php');

function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/${nombre}.php"; 
}

function truncate(string $texto, int $cantidad) : string {
    if(strlen($texto) >= $cantidad) {
        return substr($texto, 0, $cantidad) . "...";
    } else {
        return $texto;
    }
}

function estaAutenticado() {
    session_start();
    if (!$_SESSION['login']) {
        header('Location: /');
    }
}

function debugear($variable) {
    echo "<pre>"; 
    var_dump($variable);
    echo "</pre>";
    exit;
}