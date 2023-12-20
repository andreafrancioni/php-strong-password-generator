<?php
$passwordLength = $_GET["passwordLength"];

$arrayCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '|', ';', ':', ',', '.', '<', '>', '?'];
// $arrayNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
// $arraySpecialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '=', '+', '[', ']', '{', '}', '|', ';', ':', ',', '.', '<', '>', '?'];

function generaPassword($passwordLength, $arrayCharacters)
{
    $generatedPassword = "";
    for ($i = 0; $i < $passwordLength; $i++) {
        $casualCharacters = $arrayCharacters[array_rand($arrayCharacters)];

        $generatedPassword .= $casualCharacters;
    }

    return $generatedPassword;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-center text-white">Strong Password Generator</h1>
    <h3 class="text-center text-white">Genera una password sicura per i tuoi social.</h3>
    <div class="container d-flex justify-content-center flex-column">
        <div class="passwordGenerated">
            <h1><?php echo generaPassword($passwordLength, $arrayCharacters);  ?></h1>
        </div>
        <div class="backPage">
            <h4><a href="form.php">Torna alla pagina precedente</a></h4>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>