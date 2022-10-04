<?php
require 'src/db.php';
//Recoge los datos de $_REQUEST['email'], i ['password']
//Comprueba si existe en la base de datos
// Tenemos dos posibilidades
    /*
    1.Existe ==> dashboard i ç
    2. NO exiate ==> volvemos al home o nos quedamos en el login
    */ 
    //die($dsn);
    $db=connectMysql($dsn,$dbuser,$dbpass); //crea el objeto pdo
    var_dump($db); 
    if(!empty($_POST['email'])&&!empty($_POST['password'])){ //si no esta vacio
        if(isset($_POST['email'])&&isset($_POST['password'])){
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            if(auth($db,$email,$password)){ //si se autenitca. True or false
                //guardamos sesion
                
                //redirigir a otra parte -> dashboard
            }
        }
    }

    