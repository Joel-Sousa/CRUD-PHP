<html>
    <body>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <form action="../Controller/login.php" method="post">
            <table border="" align="center">
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="usuario" placeholder="ana"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="text" name="senha" placeholder="123"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Logar"></td>
                </tr>
            </table>
        </form>
    <center>
        <?php if(isset($_GET["msg"])) echo $_GET["msg"];?>
    </center>
    </body>
</html>