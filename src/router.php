<?php  
    /** -> ESTO ES DOCUMENTACIÓN
     * retorna controlador
     * 
     * @return string
     */
    function getRoute(array $routes):string 
    {
        if(isset($_REQUEST['url'])){
            $url = $_REQUEST['url'];
        }else{
        $url = 'home';
        }
        if (in_array($url,(array)$routes)){
            return $url;
        }else{
            return 'error';
        }
    }
/*
APUNTES
Este formato devuelve un string
En vez de usar get/post -->Request
isset -> si tiene valor
- Si tiene el valor la Request de la url -> la declaramos $url
 */ 

        