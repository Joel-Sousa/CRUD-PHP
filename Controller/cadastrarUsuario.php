<?php
require_once '../Controller/DAO/usuarioDAO.php';
require_once '../Controller/DTO/usuarioDTO.php';

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$perfil = $_POST["perfil"];

$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setUsuario($usuario);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setPerfil($perfil);

$usuarioDAO = new UsuarioDAO();
$status = $usuarioDAO->salvar($usuarioDTO);

if(!empty($status)){
    echo "<script>";
    echo "alert('Cadastrado!')";
    echo "</script>";
}
    