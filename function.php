<?php


function generaPassword($passwordLength, $arrayPicker)
{
    $generatedPassword = "";
    for ($i = 0; $i < $passwordLength; $i++) {
        $casualCharacters = $arrayPicker[array_rand($arrayPicker)];

        $generatedPassword .= $casualCharacters;
    }

    return $generatedPassword;
}
