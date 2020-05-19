<?php
    $str = "Ciao";
    $intVal = 10;
    $floatVal = 2.554;
    $boolVal = true;
    $nullVal = null;
    $arr = array('nome'=>'Marco', 'anni'=>33);
    // da PHP 5 in poi
    $arr2 = ['paese'=>'Italia','numero_telefonico'=>'33333333333'];

    var_dump($str);
    echo '<br />';
    var_dump($arr);
    echo '<br />';
    var_dump($arr2);
    echo '<br />';

    $a = 10;
    $a = (string) $a;
    var_dump($a);
    echo '<br />';
    $a = (float) $a;
    var_dump($a);
?>