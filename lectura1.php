<?php
//$_REQUEST[] cuando no sabemos si el dato viene por GET o POST
if(!empty($_REQUEST["username"]) && !empty($_REQUEST["password"])){
    setcookie("nombre",$_REQUEST["username"]); //Crea una cookie en el navegador con el nombre y el dato
    setcookie("password",$_REQUEST["password"],time()+60); //Con la funcion de time() le estamos añadiendo el tiempo
                                                        //que queremos que dure la cookie en memoria.
                                                        //En éste caso le estamos metiendo 60 seg. de vida
    date_default_timezone_set('Europe/Madrid');
    $fecha = date("d-m-Y H:i:s"); //los espacios los rellena con %
    setcookie("ultimoAcceso",$fecha);
    //SI QUEREMOS SACAR SÓLO LA HORA:
    //$hora = date("H:i:s");
    header("Location:index.php");
}