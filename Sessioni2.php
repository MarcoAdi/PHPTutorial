<?php
    //avendo già aperto una sessione su Sessioni.php, non viene creata una nuova sessione, ma viene recuperata quella esistente
    session_start();

    echo $_SESSION['colore'];

    $_SESSION['cibo'] = 'pizza';

?>