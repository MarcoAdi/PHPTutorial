<?php
    session_start();
    
    //echo session_save_path();

    $_SESSION['colore'] = 'verde';

    echo $_SESSION['cibo'];

?>