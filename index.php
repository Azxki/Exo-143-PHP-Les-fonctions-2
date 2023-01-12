<?php

function maFonction {
    return true;
}

function maFonction2 (string $chaine) {
    return $chaine;
}

function maFonction3 (string $chaine1, string $chaine2) {
    return $chaine1 . $chaine2;
}

function maFonction4 (int $number1, int $number2) {
    return "Le " . $number1 . " est plus grand si le " . $number1 . " est plus grand que le "  . $number2 .
        "Le"  . $number1 .  "est plus petit si"  . $number1 .  "est plus petit que le"  . $number2 .
    "Les deux"  . $number1 . $number2 .  " sont identiques si les deux nombres sont égaux";
}

function maFonction5 (int $number, string $chaine) {
    return $number . $chaine;
}

function maFonction6 (string $nom, string $prenom, int $age) {
    return "Bonjour " . $nom . $prenom . ", tu as " . $age . "ans";
}


function maFonction7 (int $age, string $genre) {
    $genre = ['homme' || 'femme'];

    if ($genre === 'homme' and $age < 18) {
        echo "vous êtes un homme et vous êtes mineur";
    }

    if ($genre === 'homme' and $age > 18) {
        echo "vous êtes un homme et vous êtes majeur";
    }

    if ($genre === 'femme' and $age < 18) {
        echo "vous êtes une femme et vous êtes mineur";
    }

    if ($genre === 'femme' and $age > 18) {
        echo "vous êtes une femme et vous êtes majeur";
    }
}

function maFonction8 (int $number1, int $number2, int $number3) {
    $number1 = 5;
    $number2 = 10;
    $number3 = 15;

    return $number1 . $number2 . $number3;
}