<?php
    declare(strict_types=1);
    //avendo messo il tipo di variabile sui parametri, viene effettuato automaticamente il cast (questo verrebbe fatto ache senza il tipo).
    //tuttavia mettendo strict_types=1 come prima istruzione dello script, viene restituito errore;
    function somma(int $num1, int $num2){
        echo $num1 + $num2 . '<br />';
    }

    somma('1fewf',2);
?>