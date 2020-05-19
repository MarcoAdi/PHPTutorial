<?php
    //le costanti possono essere definite in due modi :
    //define
    //const => non può essere definita all'interno di un'istruzione condizionale
    //Per convenzione andrebbero scritte in maiuscolo
    //da php 5.6 è possible salvare nelle costanti anche gli array

    define('ANNI',33);
    const NOME = 'Marco';

    if(true){
        //const COGNOME = 'Adinolfi';
        define('COGNOME','Adinolfi');
    }

    echo NOME . COGNOME . ANNI;
    
?>