<div style="font-size: 20px;">
    <?php
        $arr = ['Marco','Marco 2', 'Marco 3'];
        echo $arr[0] . "<br />";

        $str = 'abc';
        echo "posso accedere al singolo carattere di una stringa (es. $str) utilizzando la sintassi con parentesi quadre, quindi str[1] sarà: $str[1]<br />";

        $str = "aòb";
        echo "bisogna fare attenzione perchè per caratteri speciali possono essere utilizzati 2 byte, per esempio ò, utilizza due byte, quindi per poter accedere all'elemento successivo, devo fare +2 dell'indice, non +1, infatti, utilizzanto strLen($str) ottengo " . strlen($str) . " e non 3 <br />";

        echo "per contare correttamente il numero di caratteri, utilizzare mb_strlen(\$str) = " . mb_strlen($str) . "<br />";

        //una stringa dichiarata tra apici singoli, non effettua il parsing del nome

        $nome = 'Marco';
        echo 'Ciao io sono $nome<br />';

        //il parsing viene fatto solo se uso la stringa tra apici doppi

        echo "Ciao io sono $nome <br />";

        //i caratteri di newline (\n) non vengono considerati, non vengono stampati, ma non fa andare a capo

        echo "Ciao io sono $nome. \n questa è la seconda riga<br />";

        //per far andare a capo, bisogna utilizzare la funzione nl2br

        echo nl2br("Ciao io sono $nome. \n questa è la seconda riga<br />");


        //stringa con HEREDOC
        $str = <<<IDT
            <p>Ciao $nome, questa è una stringa con HEREDOC <br />
            \IDT; non deve essere indentato, perchè altrimenti non funziona, non devono esserci caratteri nè prima e nè dopo.
            Non è necessario fare l'escape delle "virgolette"
IDT;

        echo $str;

        //stringa con NOWDOC
    ?>
</div>