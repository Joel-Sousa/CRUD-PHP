<table border="" align="center" width="100%">
    <?php
    switch ($_SESSION["perfil"]){
    case "Administrador":
        echo "<tr>";
        echo "<td><a href='cadastrar.php' target='centro'>Cadastrar</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='listar.php' target='centro'>Listar</td>";
        echo "</tr>";
        break;
    case "Funcionario":
        echo "<tr>";
        echo "<td><a href='cadastrar.php' target='centro'>Cadastrar</td>";
        echo "</tr>";
        break;
    }
    ?>
</table>
