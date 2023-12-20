<?php


function generaPassword($passwordLength, $arrayPicker, $allowDuplicates)
{
    $generatedPassword = "";
    $usedCharacters = [];

    for ($i = 0; $i < $passwordLength; $i++) {
        $casualCharacters = $arrayPicker[array_rand($arrayPicker)];

        if ($allowDuplicates) {
            $generatedPassword .= $casualCharacters;
        } else {
            while (in_array($casualCharacters, $usedCharacters)) {
                $casualCharacters = $arrayPicker[array_rand($arrayPicker)];
            }
            $usedCharacters[] = $casualCharacters;
            $generatedPassword .= $casualCharacters;
        }
    }

    return $generatedPassword;
}
