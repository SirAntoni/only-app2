<?php

require "config/conexion.php";
require "model/users.php";

$users = new Users();

if(isset($_POST['opcion'])){
    $opcion = $_POST['opcion'];
}else{
    $opcion = "";

if(isset($_POST['email'])){
    $email = $_POST['email'];
}else{
    $email = "";
}

if(isset($_POST['password'])){
    $password = $_POST['password'];
}else{
    $password = "";
}

switch($opcion){
    case "login":
        $login = $users->login($email,$password);
        break;
    default:
        echo "error";
        break;
}


?>