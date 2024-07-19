<?php

extract($_POST);
setcookie("color", $_color, time()-3600);
header("location:cookies.php");

//primer parametro, nombre de la cookie
//segundo parametro, el valor
//tercer parametro, tiempo de la duracion de la cookie

?>