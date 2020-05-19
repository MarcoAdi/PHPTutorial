<?php
    //SCOPE DI UNA VARIABILE
    // Globale => variabili definite al di fuori di una funzione, le variabili globali non sono leggibili all'interno di una funzione, a meno di non usare la parola chiave GLOBAL oppure GLOBALS (variabili superglobali)
    // Locale => variabili definite all'interno di una funzione, le variabili locali non sono leggibili all'esterno della funzione in cui sono dichiarate
    // Statico => fa ricordare il valore precedente della funzione

    $varGlobale = 'Variabile Globale';

    function test($nome){
        global $varGlobale;
        echo $varGlobale;
        //return sprintf('Ciao %s <br />',$nome);
    }

    function testGlobals(){
         echo $GLOBALS['varGlobale'];
    }

    function testStatic(){
        static $a = 0;
        $a++;
        echo $a . ' ';
    }

    test('Test');
    echo '<br />';
    testGlobals();
    echo '<br />';
    testStatic();testStatic();testStatic();testStatic();

    //echo test('Marco');
?>