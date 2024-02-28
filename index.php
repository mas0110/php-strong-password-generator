<?php


function passworGenerator(){

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';


    $charsLength = strlen($chars);
   

   
    $password = '';

    $length_pw = $_GET['number'];
    
    if($length_pw == 0 ) {
        echo "Il parametro 'number' non è stato passato correttamente!";
    }

    
    for ($i = 0; $i < $length_pw; $i++) {
       
        $random_char = $chars[rand(0, $charsLength - 1)];

       
        $password .= $random_char;
    }

    return $password;
 }
 
 $password = passworGenerator(10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password genarator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container w-75 text-light p-5" style="background-color: #011532;">
        <form>
            <h1 class="text-center" style="color: #808A99;">Storng password Generator</h1>
            <h2 class="text-center">Genera una password sicura </h2>
            <div class="mb-3 p-3 text-dark rounded my-3" style="background-color: #CFF4FC;">
                <!-- <p>Nessun parametro valido inserito</p> -->
                <span><?php echo $password;?></span>
            </div>
            <div class="mb-3 form-check bg-light p-5 text-dark rounded">
                <div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>
                            Lunghezza Password:
                        </span>
                        <form method="GET">
                            <input type="text" id="number" name="number" class="rounded border border-light-subtle">
                        </form>

                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>
                            Consenti ripetizioni di uno o più caratteri:
                        </span>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end flex-column mb-2">
                    <div>
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">lettere</label>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" id="Check2">
                        <label class="form-check-label" for="Check2">numeri</label>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" id="Check3">
                        <label class="form-check-label" for="Check3">simboli</label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">invia</button>
                    <button class="btn btn-secondary">Annulla</button>
                </div>
            </div>
        </form>
    </div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>