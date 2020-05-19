<div style="font-size:24px">
<?php
    //OPERATORI MATEMATICI
    //OPERATORI DI INCREMENTO E DECREMENTO (++ E --) (supportato preincremento e postincremento)
    //OPERATORI DI CONFRONTO (<, <=, >, >=, ==, !=, ===, !==, <=> INTRODOTTO SU PHP7)
    //OPERATORI LOGICI (AND, OR, &&, ||, !, XOR)

    $a = (10 + 2) * 2;
    var_dump($a);

    echo "<br />";

    //modulo
    $a = 10 % 4;
    var_dump($a);

    echo "<br />";

    var_dump('10' === "10");

    echo "<br />";

    /*<=> restituisce:
         1 se il primo operatore è maggiore del secondo
         0 se i due operatori sono uguali
         -1 se il secondo operatore è maggiore del primo
    */
    echo "operatore <=> <br />";
    var_dump(10 <=> 9);
    echo "<br />";
    var_dump(10 <=> 10);
    echo "<br />";
    var_dump(9 <=> 10);
    echo "<br />";


?>
</div>