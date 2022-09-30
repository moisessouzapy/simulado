<?php
 $bd = new SQLite3("../db/equipamentos.db");

 $titulo        = $bd->escapeString($_POST["titulo"]);
 $poster        = $bd->escapeString($_POST["img"]);
 $descricao     = $bd->escapeString($_POST["descricao"]);

 $sql = "INSERT INTO equipamentos (titulo, poster, descricao)   
         VALUES ( :titulo, :poster, :descricao)";
    
$stmt = $bd->prepare($sql);
$stmt->bindValue(':titulo',$titulo, SQLITE3_TEXT);
$stmt->bindValue(':poster',$poster, SQLITE3_TEXT);
$stmt->bindValue(':descricao',$descricao, SQLITE3_TEXT);


if($stmt->execute())
    echo "\nequipamentos inseridos\n"; 
else 
echo "\nErro ao inserir.\n"; 

header("Location: ../novoEquipamento.php?msg=Equipamento+cadastrado+com+sucesso");
?>