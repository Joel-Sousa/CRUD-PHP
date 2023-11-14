<html>
    <head>
        <script>
        function confirmacao(){
            var resposta = confirm("Deseja Sair ?");
            if (resposta == true){
                window.location.href = "../Controller/sair.php";
            }
        }
        </script>
    </head>
    <body bgcolor="#000">
        <table border="" align="center" width="800" height="600" bgcolor="#fff">
            <tr height="20%">
                <td colspan="2">
                    <?php
                    include '../Controller/validarLogin.php';
                    echo "<center>CRUD &reg;</center>";
                    echo "Usuario: ", $_SESSION["usuario"], "<br>";
                    echo "Perfil: ", $_SESSION["perfil"], "<br>";
                    echo "<a href='javascript:func()' onclick='confirmacao()'>Sair</a>";
                    ?>
                </td>
            </tr>
            <tr heigth="80%">
                <td width="20%" valign="top"><?php include 'paginas.php';?></td>
                <td width="80%"><iframe name="centro" frameborder="0" width="100%" height="100%"></iframe></td>
            </tr>
        </table>
    </body>
</html>

