 
<?php

try{
        new PDO('mysql:host=localhost;dbname=teste','root','23r0');
        echo "Conexão efetuada com sucesso!";
}catch(PDOException $ex){
        echo $ex->getMessage();
}
//echo "teste"
?>
