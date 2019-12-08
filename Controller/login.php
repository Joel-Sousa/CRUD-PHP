<?php
session_start();
require_once '../Controller/DAO/usuarioDAO.php';

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$usuarioDAO = new UsuarioDAO();
$login = $usuarioDAO->login($usuario, $senha);

if(!empty($login)){
    $_SESSION["id"] = $login["id"];
    $_SESSION["usuario"] = $login["usuario"];
    $_SESSION["senha"] = $login["senha"];
    $_SESSION["perfil"] = $login["perfil"];
    header("location: ../View/home.php");
} else {
    $msg = "Errollll";
    header("location: ../View/index.php?msg={$msg}");
}
        

