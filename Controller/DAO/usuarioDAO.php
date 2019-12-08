<?php

require_once 'conexao.php';

class UsuarioDAO {

    private $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($usuario, $senha) {
        try {
            $sql = "SELECT id,usuario,senha,perfil FROM usuario "
                    . "WHERE usuario = ? AND senha = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvar(UsuarioDTO $usuarioDTO) {
        try {
            $sql = "INSERT INTO usuario(usuario,senha,perfil) "
                    . "VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getUsuario());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listar() {
        try {
            $sql = "SELECT id,usuario,senha,perfil FROM usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(pdo::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getId($id) {
        try {
            $sql = "SELECT id,usuario,senha,perfil FROM usuario "
                    . "WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterar(UsuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET usuario = ?, "
                    . "                 senha = ?, "
                    . "                 perfil = ? "
                    . "WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getUsuario());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getPerfil());
            $stmt->bindValue(4, $usuarioDTO->getId());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function pesquisa($pes) {
        try {
            $sql = "SELECT id,usuario,senha,perfil FROM usuario "
                    . "WHERE usuario LIKE ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, "%" . $pes . "%");
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM usuario WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
