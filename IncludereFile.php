<?php
/**
 * include => in caso di pagina mancante, lo script continua
 * include_once => a prescindere dal numero di volte che si fa l'include, viene eseguito solo la prima volta
 * require => in caso di pagina mancante, lo script termina con fatal error
 * require_once => analogo nel comportamento
 */
    echo '<h3>contenuto di includereFile.php</h3>';

    //include 'fileDaIncludere1.php'
    require 'fileDaIncludere1.php'
?>