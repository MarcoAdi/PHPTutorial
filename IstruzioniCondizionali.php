<div style="font-size: 24px;">
<?php
    //ISTRUZIONI CONDIZIONALI IF/ELSE
    //COSTRUTTO CONDIZIONALE SWITCH
    //CICLO ITERAZIONE FOR
    //CICLO ITERAZIONE WHILE

    $temp = 30;
    if($temp > 0 && $temp < 10){
        echo "maggiore di 0 e minore di 10 ";
    }
    elseif($temp > 10 && $temp < 20){
        echo "maggiore di 10 e minore di 20";
    }
    else{
        echo "maggiore di 20 o minore di 0";
    }

    echo "<br />costrutto switch <br />";

    $voto = 1; //da 1 a 5

    switch ($voto) {
        case 1: {
            echo 'Voto 1'; 
            echo "<br />Altra istruzione";
            break;
        }
        case 2:
            echo 'Voto 2'; 
            echo "<br />Altra istruzione";
            break;
        case 3:
            echo 'Voto 3'; 
            echo "<br />Altra istruzione";
            break;
        case 4:
            echo 'Voto 4';
            echo "<br />Altra istruzione";
            break;
        case 5: {
            echo 'Voto 5'; 
            echo "<br />Altra istruzione";
            break;
        }
        default:
            echo "Voto non valido";
            echo "<br />Altra istruzione";
            break;
    }

    for($i = 1; $i <= 3; $i++){
        echo "<br /> i vale $i <br />";
    }

    while ($i >= 0){
        echo "<br />Istruzione while i  = " . $i--;
    }

?>
</div>