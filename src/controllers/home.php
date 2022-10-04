<?php

    //render template home
    //require 'src/templates/home.tpl.php'; opcion1
    require 'src/render.php';
    $title = "Superwomen";
    $alumnes = [
        'Perico Palotes',
        'Aitor Tillas Frias',
        'Aitor Mentas Fuertes'
    ];
    $aa = "hola";
    

    //indicmos que plantilla utilizar
    //echo render('home',['title'=> 'Superman']);
    //echo render('home',['title'=> $title]);
    echo render('home',['title'=>$title, 'alumnes'=>$alumnes]);




/*
Metodo rederizar    
*/