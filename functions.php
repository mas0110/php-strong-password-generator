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