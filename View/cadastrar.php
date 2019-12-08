<html>
    <body>
        <br><br><br><br><br><br><br>
        <form action="../Controller/cadastrarUsuario.php" method="post">
            <table align="center">
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usuario" placeholder="Usuario"></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="password" name="senha" placeholder="Senha"></td>
                </tr>
                <tr>
                    <td>Perfil:</td>
                    <td>
                        <select name="perfil">
                            <option value="Administrador">Administrador</option>
                            <option value="Funcionario">Funcionario</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Cadastrar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
