<?php
session_start();

if(!isset($_SESSION["usuario"])){
    $msg ="Nao esta logado!";
    header("location: ../View/index.php?msg={$msg}");
}
