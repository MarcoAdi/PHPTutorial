<div style="font-size: 26px;">
    <?php
        $primo=1;
        $secondo=1;
        $numIterazioni=5;

        for($i=1;$i<=$numIterazioni;$i++){

            $ris = $primo + $secondo;
            echo "Prima iterazione " . ($primo + $secondo) . "<br />";
            $primo = $secondo;
            $secondo = $ris;

        }
    ?>
</div>