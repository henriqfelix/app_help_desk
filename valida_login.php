<?php

    //variável de autenticação 
    $usuario_autenticado = false;

    //usuários do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com', 'password' => '1234'),
        array('email' => 'user@teste.com', 'password' => 'abcd'),
    );

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
    } else {
        header('Location: index.php?login=erro');
    }

?>