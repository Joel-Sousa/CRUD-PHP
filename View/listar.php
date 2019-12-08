<html>
    <head>
        <script>
        function confirmacao(id){
            var resposta = confirm("Vai deleta?");
            if(resposta == true){
                window.location.href = "../Controller/excluir.php?id=" + id;
            }
        }
        </script>
            
    </head>
    <body>
        <form action="" method="post" align="center">
            <input type="text" name="pes" placeholder="Pesquisa">
            <input type="submit" value="Pesquisa">
        </form>
        <?php 
        require_once '../Controller/DAO/usuarioDAO.php';
        $usuarioDAO = new UsuarioDAO();
        if(isset($_POST["pes"])){
            $pes = $_POST["pes"];
            $usuarios = $usuarioDAO->pesquisa($pes);
        }else{
        $usuarios = $usuarioDAO->listar();
        }
            echo "<table border='' align='center'>";
            echo "<tr>";
            echo "<td>Usuario</td>";
            echo "<td>Senha</td>";
            echo "<td>Perfil</td>";
            echo "<td>Alterar</td>";
            echo "<td>Excluir</td>";
            echo "</tr>";
            foreach ($usuarios as $u){
            echo "<tr>";
            echo "<td>{$u["usuario"]}</td>";
            echo "<td>{$u["senha"]}</td>";
            echo "<td>{$u["perfil"]}</td>";
            echo "<td><a href='alterar.php?id={$u["id"]}'>Alterar</td>";
            echo "<td><a href='javascript:func()' onclick='confirmacao({$u["id"]})'>Excluir</td>";
            echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>