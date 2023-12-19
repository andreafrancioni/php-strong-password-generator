<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Strong Password Generator</h1>
    <h3>Genera una password sicura per i tuoi social.</h3>

    <form action="password.php" method="get">
        <label for="passwordLength">Lunghezza password:</label>
        <input type="text" name="passwordLength">
        <button type="submit">Invia</button>
        <button type="reset">Annulla</button>
    </form>
</body>

</html>