<?php

if(!empty($_POST['username'] && $_POST['email'] && $_POST['password'])){
    //filtrar
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST,'username',FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
    //sentencia
    $db= connectMysql($dsn, $dbuser, $dbpass);
    $stmt = $db->prepare("INSERT INTO users(username, email, password)VALUES(?,?,?)");
    $res = $stmt->execute([1=>$username,2=>email,3=>password_hash($password,['cost'=> 4])]);
    if($res){
        //logueamos vamos al dashboard
        //Vamos al login
        $_SESSION['user']['username']= $username;
        $_SESSION['user'](obj)->username = $username;
        header('Location:?url=dashboard');
    }
    
}

//GET o POST dependiendo de lo que hayamos aplicado en e formulario