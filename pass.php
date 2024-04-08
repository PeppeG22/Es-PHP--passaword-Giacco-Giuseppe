<?php

$pass = readline('Inserisci la password:');

//controllare se è di almeno 8 caretteri

// $lenght = false;
// $number = false;
// $upper = false;

function  checkLenght($string){
    if(strlen($string) >= 8){
        echo "La tua password ha la lunghezza giusta  \n";
        return true;
    }else{
        return false;
    };
    
};

//$lenght  = checkLenght($pass);

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

//$number =  checkNumber($pass);


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


//$upper = checkUpper($pass);



//controllare se ci sono caratteri speciali

function checkSpeChars($string){
    $specialChars =  ['@', '!', '?', '.', '+', '-', '%', '&'];

    for ($i=0; $i < strlen($string) ; $i++) { 
        if(in_array($string[$i], $specialChars)){
            echo "la tua password contiene un carattere speciale \n";
            return true;
        }
        return  false;
    };
};

//controllo finale


function checkPass($string){
    if (checkLenght($string) && checkNumber($string) && checkUpper($string) && checkSpeChars($string)) {
        echo "la tua password va bene \n";
    }else{
        echo "la tua password non va bene \n";
    };
};


checkPass($pass);


?>