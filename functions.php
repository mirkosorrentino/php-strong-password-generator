<?php 

function password_gen($pwd_length) {
    $letters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $numbers = '1234567890';
    $symbols = '!£$&/()=?[]+*@#}{';
    
    $chars = $letters . $numbers . $symbols;
    
    $password = '';

    while (strlen($password) < $pwd_length) {
        $next_char = rand(0, strlen($chars));
        $password .= $chars[$next_char];
    }

    return $password;
}

?>