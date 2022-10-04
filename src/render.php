<?php

/**
 * Undocumented function
 * 
 * @param string $tpl
 * @return string
 */

 function render(string $tpl,array $data=[]):string 
 {
    //para distinguir si hay datos o no -> lo convierte en tabla de signos
    //var_dump($data);
    //die;
    if($data){
        extract($data,EXTR_OVERWRITE);
    }
    ob_start();
    require 'src/templates/'.$tpl.'.tpl.php';
    //concatenamosla ruta -> nombre plantilla ->.tpl.php
    $rendered = ob_get_clean();
    return (string)$rendered;
 }