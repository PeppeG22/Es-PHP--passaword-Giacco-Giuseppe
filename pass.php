<?php

//controllare se è di almeno 8 caretteri


function  checkLenght($string){
    if(strlen($string) >= 8){
        echo "La tua password ha la lunghezza giusta  \n";
        return true;
    }else{
        return false;
    };
    
};



//controllare se c'è almeno un numero


function checkNumber($string){
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (is_numeric($string[$i])) {
            echo  "la tua password contiene un numero \n";
            return true;
        }
    };
    return false;
};




//controllare se c'è almeno una lettera maiuscola


function  checkUpper($string){
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (ctype_upper($string[$i])) {
            echo "la tua password contiene una maiuscola \n";
            return  true;
        };
    };
    return  false;
};





//controllare se ci sono caratteri speciali

function checkSpeChars($string){
    $specialChars =  ['@', '!', '?', '.', '+', '-', '%', '&'];

    for ($i=0; $i < strlen($string) ; $i++) { 
        if(in_array($string[$i], $specialChars)){
            echo "la tua password contiene almeno un carattere speciale \n";
            return true;
        }
    };
    return  false;
};

//controllo finale


function checkPass($string){
    if (checkLenght($string) && checkNumber($string) && checkUpper($string) && checkSpeChars($string)) {
        echo "la tua password va bene \n";
        return true;
    }else{
        echo "la tua password non va bene \n";
        return false;
    };
};


do  {
    $pass = readline('Inserisci la password:');    
} while(!checkPass($pass));


?>