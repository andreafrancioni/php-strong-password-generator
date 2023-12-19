<?php
$passwordLength = $_GET["passwordLength"];

$arrayCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '|', ';', ':', ',', '.', '<', '>', '?'];
// $arrayNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
// $arraySpecialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '|', ';', ':', ',', '.', '<', '>', '?'];

function generaPassword($passwordLength, $arrayCharacters)
{
    $generatedPassword = "";
    for ($i = 0; $i < $passwordLength; $i++) {
        $casualCharacters = $arrayCharacters[array_rand($arrayCharacters)];

        $generatedPassword .= $casualCharacters;
    }

    return $generatedPassword;
}

echo generaPassword($passwordLength, $arrayCharacters);
