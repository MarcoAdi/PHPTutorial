<div style="font-size: 16px;">
    <?php
        /*
            explode/implode
            trim/ltrim/rtrim
            strpos/strrpos
            print/sprintf
            strip_tags
            strtoupper/strtolower
            ucfirst/ucwords
        */

        //l'explode è la stessa cosa dello split.
        //è possibile inserire un terzo parametro opzionale che identifica il numero massimo di elementi, l'ultimo elemeno sarà valorizzato con il resto della stringa originale
        echo "<p>";
        $str = 'Ciao io sono Marco e sono un ciarlatano';
        $arr = explode(' ',$str,3);

        print_r($arr);
        echo "</p>";

        //l'implode è il procedimento inverso dell'explode, dato un array, viene concatenato in una stringa  (e per un array di numeri?)
        echo "<p>";
        $strArr = ["Ciao","io","sono","Marco"];
        $strInt = [1,2,3,4,5,6];
        $str = implode(" ",$strArr);
        $int = implode(" ",$strInt);
        echo var_dump($str);
        echo "<br />";
        echo var_dump($int);
        echo "</p>";

        //strpos, strrpos,substr
        echo "<p>";
        //strpos ritorna la posizione della prima occorrenza di un carattere all'interno di una stringa, nel caso non sia resente, ritorna false
        //strrpos (la seconda r sta per Right?) ritorna la posizione dell'ultima' occorrenza di un carattere all'interno di una stringa, nel caso non sia resente, ritorna false
        //Sia strpos, sia strrpos cercano una stringa case sensitive, quindi se cercassi A all'interno della stringa CIaO aMici, non troverebbe nulla (cioè restituirebbe false)
        //substr ritorna una porzione di una stringa:
        // un valore negativo sul terzo parametro, indica il numero di caratteri che sarà escluso a partire dal fondo
        // un valore negativo sul secondo parametro, indica di partire a contare dal fondo
        
        //TUTTE QUESTE FUNZIONI LAVORANO CON I BYTE, PER ESSERE SICURI DI UTILIZZARE I CARATTERI, UTILIZZARE LE FUNZIONI DELLA LIBRERIA MB (mb_substr)

        $str = "CIaO aMiCi";
        $ris = strpos($str,'A',3);
        var_dump($ris);

        $str = "abcdefgh";
        $rest = substr($str,0,1); //a
        echo "$rest <br />";
        $rest = substr($str,0,-2); //abcd
        echo "$rest <br />";
        $rest = substr($str,2,-1); //cde
        echo "$rest <br />";
        $rest = substr($str,4,-4); //false, va in conflitto
        echo "$rest <br />";
        $rest = substr($str,-3,-1); //de
        echo "$rest <br />";

        echo "</p>";

        //print, printf. sprintf
        //print è uguale ad echo, ad eccezione che non ammette la virgola per concatenazione (ma si può comunque usare il punto)
        //printf serve per inviare in output una stringa formattata (uguale a string.format di c#)
        //sprintf è la stessa cosa di printf, ma non fa visualizzare a video, è necessario fare un echo di una variabile valorizzata con la formattazione di sprintf

        $competenza = 'sono un "ciarlatano"';
        $anni = 33;
        printf('Ciao %s ed ho %d anni', $competenza, $anni);

        //strip_tags rimuove i tag html presenti all'interno di una stringa

        echo "<p>";

        $str = "Questa è <strong>una stringa</strong>. <a href=''>link</a>";
        //per consentire i tag html può essere usato il seconod parametro come qui di seguito.
        echo strip_tags($str,'<strong><a>');

        echo "</p>";
    ?>
</div>