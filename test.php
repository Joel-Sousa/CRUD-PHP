 
<?php try{ new PDO('mysql:host=localhost;dbname=teste','usuario','senha');
        echo "Conexão efetuada com sucesso!";
}catch(PDOException $ex){ echo $ex->getMessage();}?>


<?php
// Outra forma de conexao
    //$pdo = new PDO("mysql:host=host;dbname=nomebanco", "usuario","senha");
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //// $sql = "SELECT campo1, campo2 FROM tabela limit 5";
    //$stmt = $pdo->prepare($sql);
    //$stmt->execute();
    //var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
