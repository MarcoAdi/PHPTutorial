<?php

    //DICHIARAZIONE DEGLI ARRAY

    $arr = Array('red' => 'rosso','home' => 'casa');

    echo $arr['home'] . "<br />";

    //altro modo di definire gli array:
    $arr = ['red' => 'rosso', 'home' => 'casa'];

    echo $arr['red'] . "<br />";

    //se non assegno una chiave, PHP ne assegna una di default (0,1,ecc...)

    $arr = ['rosso',40,'Giallo'];
    var_dump($arr);
    echo "<br />";
    $arr = Array('rosso',40,'verde');
    var_dump($arr);
    echo "<br />";

    //per ottenere il numero di elementi in un array si utilizza la funzione count
    $tot = count($arr);
    echo "Num elementi dell'array: $tot <br />";

    $arr = Array('red' => 'rosso','home' => 'casa');

    foreach($arr as $key => $value) {
        echo "$key => $value <br />";
    }

    //OPERAZIONI SUGLI ARRAY
    /*
        array_pop() - rimuove l'ultimo elemento
        array_shift() - rimuove il primo elemento
        array_push() - inserisce un nuovo elemento alla fine dell'array
        array_unshift() - inserisce uno o più elementi all'inizio dell'array
    */

    $arr = [2,10,'a',1000];
    var_dump($arr);
    echo "<br />";

    $rimossoUltimo = array_pop($arr);

    echo "<p>";
    printf("array con elemento rimosso %s <br />",var_dump($arr));
    printf("elemento rimosso %s <br />",var_dump($rimossoUltimo));
    echo "</p>";

    echo "<p>";
    $rimossoPrimo = array_shift($arr);
    var_dump($arr);
    echo "<br />";
    var_dump($rimossoPrimo);
    echo "</p>";

    echo "<p>";
    echo 'Aggiungo elementi alla fine <br/>';
    array_push($arr,'penultimo','ultimo');
    var_dump($arr);
    echo "</p>";

    echo "<p>";
    echo 'Aggiungo elementi all\'inizio <br />';
    array_unshift($arr,'primo','secondo');
    var_dump($arr);
    echo '</p>';


    /*
        FUNZIONI DI RICERCA IN UN ARRAY
        array_search() => cerca un valore all'interno di un array e ritorna la chiave, se non lo trova, ritorna false. Impostando come terzo arametro true, verrà controllato anche il tipo
        in_array() => stesso comportamento di array_search, tuttavia non restituisce l'indice di un elemento trovato, ma restituisce true se lo trova e false se non lo trova
        array_key_exists() => controlla se una chiave è presente all'interno di un array
    */

    echo "<p>";
    $arr = [10,'a',2.4,'b' => 20];
    var_dump($arr);
    $ris = array_search(10,$arr,TRUE);
    echo "<br />";
    var_dump($ris);
    echo "</p>";

    echo '<p>';
    $ris = in_array('A',$arr,FALSE);
    var_dump($ris);
    echo '</p>';

    echo '<p>';
    $ris = array_key_exists(0,$arr);
    var_dump($ris);
    echo '</p>';

    /*
        ALTRE FUNZIONE DI GESTIONE DEGLI ARRAY
        array_merge() => unisce più array, nel caso che una chiave definita esista già, questa viene sovrascritta
        array_diff() => restituisce un array con gli elementi presenti nel primo array ma non negli altri, la riscerca è keysensitive, la ricerca viene fatta per valore!!!
    */

    echo '<p>';
    $arr1 = [10,20];
    $arr2 = ['a' => 10, 'b' => 300];
    $arr3 = [20, 'b' => 309];

    $unione = array_merge($arr1,$arr2,$arr3);
    var_dump($unione);

    echo '</p>';

    echo '<p>';
    $arr1 = [10,20,30];
    $arr2 = [20, 'b' => 10];
    $arr3 = [30];
    $diff = array_diff($arr1,$arr2,$arr3);
    var_dump($diff);
    echo '</p>';

    /* 
        array_values() => ritorna i soli valori dell'array passato come parametro, senza le chiavi
        unset => rimuove uno specifico elemento di un array
        array_replace() => sostituisce i valori del secondo parametro con i valori del primo, laddove le chiavi sono uguali
    */

    echo '<p>';
    $arr1 = ['a' => 1, 2,3,'d' => 4];
    var_dump(array_values($arr1));
    echo '<br />';
    unset($arr1[1]);
    //va a rimuovere l'elemento con chiave 1, quindi 2, perchè l'indice dell'array originale è a,0,1,d
    var_dump($arr1);
    
    echo '</p>';

    echo '<p>';
    $arr1 = ['n' => 10, 'a' => 20];
    $arr2 = [12, 'a' => 25,40];

    $nuovo = array_replace($arr1, $arr2);

    var_dump($nuovo);

    echo '</p>';

    /* 
        ORDINAMENTO DEGLI ELEMENTI DI UN ARRAY
        sort($array,tipo [opzionale])

        SORT_NUMERIC - comparazione numerica
        SORT_STRING - comparazione come stringa
        SORT_NATURAL - comparazione nell'ordine naturale

        asort($array, tipo [opzionale])
        asort effettua l'ordinamento, e a differenza di sort mantiene la correlazione chiave - valore
    */

    echo '<p>';
    $arr = [10,0.7,'dcwwdcwe','c' => 100,12];
    var_dump($arr);

    echo 'array ordinato con sort ed opzione SORT_NUMERIC (la stringa è convertita a 0, quindi sono il primo elemento) <br />';

    //sort($arr,SORT_NUMERIC);
    asort($arr,SORT_STRING);
    var_dump($arr);

    echo '</p>';

?>