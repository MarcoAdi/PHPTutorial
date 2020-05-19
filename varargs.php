<?php
    function test1va(...$argomenti){
        echo var_dump($argomenti) . '<br />';
    }

    function test2va($str1,$str2,...$argomenti){
        echo $str1 . $str2;
        echo '<br />';
        echo var_dump($argomenti);
    }

    test1va(1,2,'3');
    test2va('a',1,'34',false,true);
?>