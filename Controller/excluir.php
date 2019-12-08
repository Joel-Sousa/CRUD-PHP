<?php
require_once '../Controller/DAO/usuarioDAO.php';
$id = $_GET["id"];

$usuarioDAO = new UsuarioDAO();
$status = $usuarioDAO->excluir($id);

if(!empty($status)){
    echo "<script>";
    echo "alert ('Deletado!')";
    echo "</script>";
}
