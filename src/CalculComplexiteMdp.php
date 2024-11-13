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
        echo "Des numéros sont présents dans le mot de passse \n";
        $nbCaractèrePossible += 10;
    }

    if ($minusculePresent ?? false){
        echo "Des minuscules sont présents dans le mot de passse \n";
        $nbCaractèrePossible += 26;
    }

    if ($majusculePresent ?? false){
        echo "Des majuscules sont présents dans le mot de passse \n";
        $nbCaractèrePossible += 26;
    }

    if ($caractereSpeciauxPresent ?? false){
        echo "Des caractères spéciaux sont présents dans le mot de passse \n";
        $nbCaractèrePossible += 23;
    }

    echo PHP_EOL;

    return strlen($mdp)*log($nbCaractèrePossible,2);

}