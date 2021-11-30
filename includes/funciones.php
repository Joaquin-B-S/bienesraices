<?php

require 'app.php';

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

function estaAutenticado() : bool {
    session_start();
    
    $auth = $_SESSION['login'];

    if ($auth) {
        return true;
    }

    return false;

}