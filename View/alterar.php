<html>
    <body>
        <?php
        require_once '../Controller/DAO/usuarioDAO.php';
        $id = $_GET["id"];
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->getId($id);
        ?>
        <br><br><br><br><br><br><br>
        <form action="../Controller/alterarUsuario.php" method="post">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>" readonly="true"></td>
                </tr>
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="usuario" value="<?php echo $usuario["usuario"]; ?>"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="text" name="senha" value="<?php echo $usuario["senha"]; ?>"></td>
                </tr>
                <tr>
                    <td>Perfil</td>
                    <td><input type="text" name="perfil" value="<?php echo $usuario["perfil"]; ?>" readonly="true"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Alterar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
