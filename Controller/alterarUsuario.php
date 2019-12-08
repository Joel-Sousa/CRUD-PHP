<?php
require_once '../Controller/DAO/usuarioDAO.php';
require_once '../Controller/DTO/usuarioDTO.php';

$id = $_POST["id"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$perfil = $_POST["perfil"];

$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setId($id);
$usuarioDTO->setUsuario($usuario);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setPerfil($perfil);

$usuarioDAO = new UsuarioDAO();
$status = $usuarioDAO->alterar($usuarioDTO);

if(!empty($status)){
    echo "<script>";
    echo "alert ('Alterado!')";
    echo "</script>";
}