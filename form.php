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
    <div class="container">
        <form action="password.php" method="get">
            <div class="row d-flex justify-content-center">
                <div class="col-6 d-flex flex-column">
                    <label class="mb-3" for="passwordLength">Lunghezza password:</label>

                    <label for="repeatYes">Consenti ripetizioni di uno o più caratteri:</label>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="number" min="8" max="30" name="passwordLength" required>
                    <div class="switch mb-3">

                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div> -->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="duplicateYes" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Consenti</label>
                        </div>
                    </div>
                    <div class="check-box d-flex flex-column">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkedLettere" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkedNumeri" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkedSimboli" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Simboli
                            </label>
                        </div>
                    </div>



                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Invia</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>
                </div>
                <div class="col-12">
                    <?php


                    include __DIR__ . "/password.php";
                    ?>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>