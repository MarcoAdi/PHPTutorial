<?php
    /**I NAMESPACES
     * Introduzione
     * - Risoluzione problema collisione tra nomi di classi, funzioni e costanti
     * - Possibilità di creare alias per far riferimento ad una risorsa con percorso lungo
     */

     /*definendo all'interno dello stesso file due classi uguali, ottengo un errore,  
     class Test { }
     class Test { }

     stessa cosa effettuando il require once di due file che implementano la stessa classe (ma senza namespace)
     require_once('Prova.php');
     require_once('Prova2.php');
     */

    require_once('Prova.php');
    require_once('Prova2.php');

    //Avendo inserito un namespace, per richimare la classe di quel namespace, anteporre <namespace>\ al nome della classe da istanziare

    //Si può definire un alias per un namespace in questo modo

    use Spazio1 as Spz1;
    use Spazio2 as Spz2;

    $obj = new Spz1\Prova;
    $obj2 = new Spz2\Prova;

    $obj->m1();
    $obj2->m1();

     
     
?>