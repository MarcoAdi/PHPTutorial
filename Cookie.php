<?php

    /**
     * I COOKIE CREAZIONE E LETTURA
     * setcookie(name,value,expire,path,domain,secure,httponly);
     * path è il path su cui sarà disponibile il cookie
     * 
     */

     //PER RIMUOVERE UN COOKIE, IMPOSTARE IL PARAMETRO EXPIRE AD UN NUMERO DI SECONDI NEL PASSATO

    //setcookie('colore','giallo',time() + 3600);

    //echo $_COOKIE['colore'];

    //setcookie('colore','rosso')

    echo time() + 7200;
    echo '<br />';
    echo strtotime('+1 day 2 hours');
?>