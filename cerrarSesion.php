<?php
//Si queremos trabajar con sesiones:
//session_start();
//session_destroy();

setcookie("nombre");
setcookie("password");
setcookie("ultimoAcceso");

/* BORRAR TODAS LAS COOKIES DE UNA VEZ ¡¡¡¡NO FUNCIONA!!!!! */
//if(ini_get("session.use_cookies")) {
//    $params = session_get_cookie_params();
//    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
//}

header("location:index.php");
