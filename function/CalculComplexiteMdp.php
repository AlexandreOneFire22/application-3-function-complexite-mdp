<?php

function CalculComplexiteMdp($mdp) :int{

    $tabMdp = str_split($mdp);

    foreach ($tabMdp as $lettre){

        $assciiLetttre = ord($lettre);

        switch (true) {
            case ($assciiLetttre>=48 && $assciiLetttre<=57):
                $numeroPresent = true;
                break;

            case ($assciiLetttre>=65 && $assciiLetttre<=90):
                $majusculePresent = true;
                break;

            case ($assciiLetttre>=97 && $assciiLetttre<=122):
                $minusculePresent = true;
                break;

            default :
                $caractereSpeciauxPresent = true;

        }
    }

    $nbCaractèrePossible = 0;

    if ($numeroPresent ?? false){
        echo "NUMERO";
        $nbCaractèrePossible += 10;
    }

    if ($minusculePresent ?? false){
        echo "MINUSCULE";
        $nbCaractèrePossible += 26;
    }

    if ($majusculePresent ?? false){
        echo "MAJUSCULE";
        $nbCaractèrePossible += 26;
    }

    if ($caractereSpeciauxPresent ?? false){
        echo "CARACTERE SPECIAUX";
        $nbCaractèrePossible += 23;
    }

    return strlen($mdp)*log($nbCaractèrePossible,2);

}