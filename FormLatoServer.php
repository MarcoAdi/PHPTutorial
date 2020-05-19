<?php
    require_once('formValidationFunctions.php');
    $stato = validate();
    //var_dump($stato);
?>

<!doctype html>
<html>
    <head>
        <title>Form lato Server, come catturare dati passati in post</title>
    </head>
    <body>
        <?php
            foreach($stato['message'] as $message){
                echo $message . '<br />';
            }
        ?>

        <form action="<?php $_SERVER['SCRIPT_NAME']?>" method="POST" enctype="multipart/form-data">
            <input type="text" name="nome" required /><br />
            <input type="email" name="email" required /><br />
            <select name="numeri">
                <option value="">Seleziona il numero</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br />
            <input type="radio" name="sesso" value="F">F</input>
            <input type="radio" name="sesso" value="M">M</input>
            <br />
            <input type="checkbox" name="dispositivi[]" value="macbook">Mac Book</input>
            <input type="checkbox" name="dispositivi[]" value="PC">Personal Computer</input>
            <input type="checkbox" name="dispositivi[]" value="Smartphone">Smartphone</input>
            <br />
            <input type="file" name="allegato" />
            <br />
            <input type="submit" name="modulo" value="invia" />
        </form>
    </body>
</html>