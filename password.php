<?php

$passwordLength = $_GET["passwordLength"] ?? false;
$checkedLettere = $_GET["checkedLettere"] ?? false;
$checkedNumeri = (isset($_GET["checkedNumeri"]) ? $_GET["checkedNumeri"] : false);
$checkedSimboli = $_GET["checkedSimboli"] ?? false;
$allowDuplicates = isset($_GET['duplicateYes']) && $_GET['duplicateYes'] == 'on';

$arrayPicker = [];
$arrayLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$arrayNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$arraySpecialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '=', '+', '[', ']', '{', '}', '|', ';', ':', ',', '.', '?'];


if ($checkedLettere) {
    $arrayPicker = array_merge($arrayPicker, $arrayLetters);
}

if ($checkedNumeri) {
    $arrayPicker = array_merge($arrayPicker, $arrayNumbers);
}

if ($checkedSimboli) {
    $arrayPicker = array_merge($arrayPicker, $arraySpecialCharacters);
}


// function generaPassword($passwordLength, $arrayPicker)
// {
//     $generatedPassword = "";
//     for ($i = 0; $i < $passwordLength; $i++) {
//         $casualCharacters = $arrayPicker[array_rand($arrayPicker)];

//         $generatedPassword .= $casualCharacters;
//     }

//     return $generatedPassword;
// }
