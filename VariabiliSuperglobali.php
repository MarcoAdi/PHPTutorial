<?php
    /**
     * $GLOBALS => mantiene il riferimento a tutte le variabili definite nello scope globale
     * $_SERVER 
     * $_GET
     * $_POST
     * $_FILES => informazioni sui file caricati
     * $_COOKIE
     * $_SESSION
     * $_REQUEST => contiene i dati di $_GET, $_POST e $_COOKIE
     * $_ENV => contiene le variabili d'ambiente
     */

    //$test=1;

    /*
    echo '<p>';
    //var_dump($GLOBALS);
    //var_dump($_SERVER);
    //var_dump($_GET);
    //var_dump($_REQUEST);
    var_dump($_ENV);
    echo '</p>';
    */
?>
<!doctype html>
<head>
    <title>Test GET variabili superglobali</title>
</head>
<body>
    <form action='pagina2.php' method="POST">
        <input type="text" name="nome" placeholder="Nome" /> <br />
        <input type="text" name="anni" placeholder="Anni" /> <br />
        <input type="submit" value="Invia" />
    </form>
</body>