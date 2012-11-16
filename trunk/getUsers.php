<?php
    session_start();
    if(!isset($_SESSION['users'])) {
        $request = file_get_contents('https://services.sapo.pt/Codebits/gettoken?user=luisfgteofilo@gmail.com&password=239818768');
        $token = json_decode($request)->{'token'};
        $_SESSION['users'] = file_get_contents('https://services.sapo.pt/Codebits/users?token='.$token);
    }
    echo $_SESSION['users'];    
?>