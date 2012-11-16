<?php
    session_start();
    if(!isset($_SESSION['users'])) {
        $request = file_get_contents('https://services.sapo.pt/Codebits/gettoken?user=luisfgteofilo@gmail.com&password=Lu15T30F1L0');
        $token = json_decode($request)->{'token'};
        $_SESSION['users'] = file_get_contents('https://services.sapo.pt/Codebits/users?token='.$token);
    }
    echo $_SESSION['users'];    
?>