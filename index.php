<?php

    ini_set('display_errors','On'); //sirve para comprobar els errors
    session_start();
    require 'config.php';
    require 'src/router.php';
    require 'src/routes.php';
    //Configuración entorno
    
    //require 'src/router.php';

   // define ('APP', __DIR__);
    
    //Enrutamiento
    $controlador = getRoute($routes);
    

    require 'src/controllers/'.$controlador.'.php';
    //if ($GET_['url']=);

    //Llamara al controlador

    

   


/*
APUNTES
include: va añadiendo todo el contenido que encuente
include_once: solo una vez
require: Si se llama una funcion NO definida en el php
    Solo ejecuta cuando se requiere el script.
    Solo ejecuta la funcion que hayas definido. Sino, 
    busca la funcion y lo ejecuta y volvemos a empezar
    Es como un return
    */ 