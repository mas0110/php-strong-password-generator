<?php
session_start();

include 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Genarator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
crossorigin="anonymous">
</head>
<body>
    <div class="container w-75 text-light p-5 rounded-bottom" style="background-color: #011532;">
             <h1 class="text-center" style="color: #808A99;">Storng password Generator</h1>
             <h2 class="text-center text-light">Genera una password sicura </h2>
             <div class="mb-3 p-3 rounded my-3 text-dark" style="background-color: #CFF4FC;">
                 <!-- <p>Nessun parametro valido inserito</p> -->
                 <span><?php echo $password;?></span>
             </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>