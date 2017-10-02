<?php

include_once 'Login.php';
$idUser = filter_input(INPUT_POST, "idUser", FILTER_SANITIZE_STRING);
$nomeUser = filter_input(INPUT_POST, "nomeUser", FILTER_SANITIZE_STRING);
$imagemUser = filter_input(INPUT_POST, "imagemUser", FILTER_SANITIZE_STRING);
$emailUser = filter_input(INPUT_POST, "emailUser", FILTER_SANITIZE_STRING);
$tokenUser = filter_input(INPUT_POST, "tokenUser", FILTER_SANITIZE_STRING);
$usuario = new Login();
$usuario->setIdUser($idUser);
$usuario->setNomeUser($nomeUser);
$usuario->setImagemUser($imagemUser);
$usuario->setEmailUser($emailUser);
$usuario->setTokenUser($tokenUser);
$usuario->insert();

if ($usuario->logar()) {
    $resultado = "dashboard.php";
    echo $resultado;
} else {
    $resultado = "erro";
    echo json_encode($resultado);
}