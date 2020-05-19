<?php
    function validate(): Array{

        $status = [
            'send' => 0,
            'error' => 0,
            'message' => '',
            'messageUpload' => ''
        ];

        $messages = [];

        if(isset($_POST['modulo'])){

            upload($status);
    
            $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
            
            if(strlen($nome) == 0){
                $status['error'] = 1;
                array_push($messages,'Non è stato inserito il nome');
            }
    
            
    
            if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
                $status['error']=1;
                array_push($messages,'Non è stata inserita un\'email corretta');
            }
    
            
    
            $opz['options'] = ['min_range'=>1, 'max_range'=>3];
            if(!filter_input(INPUT_POST,'numeri',FILTER_VALIDATE_INT,$opz)){
                $status['error']=1;
                array_push($messages,'Non è stato inserito un numero corretto');
            }
    
            if(!filter_has_var(INPUT_POST,'sesso')){
                $status['error']=1;
                array_push($messages,'Non è stato inserito il sesso');
            }
        }
        else{
            array_push($messages,'Non è stato passato il modulo');
        }

        $status['message'] = $messages;

        return $status;
    }

    function upload(Array $status){
        $nomeFile = $_FILES['allegato']['name'];
        $tmpPath = $_FILES['allegato']['tmp_name'];
        $errorCode = $_FILES['allegato']['error'];

        if($errorCode === UPLOAD_ERR_OK){
            //echo "Il file viene caricato correttamente";
            if(move_uploaded_file($tmpPath,'upload/'.$nomeFile)){
                echo 'il file è stto caricato correttamente';
            }
            else{
                echo 'problemi nel caricamento del file';
            }
        }
    }
?>