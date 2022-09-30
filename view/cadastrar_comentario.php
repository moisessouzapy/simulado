<?php
 $bd1 = new SQLite3("../db/comentarios.db");

 $comentarios   = $bd1->escapeString($_POST["comentarios"]);
 $titulo_comentario   = $bd1->escapeString($_POST["titulo_comentario"]);
/*  $usuario       = $bd->escapeString($_POST["usuario"]); */

 $sql1 = "INSERT INTO comentarios (comentarios, titulo_comentario)   
         VALUES ( :comentarios, :titulo_comentario)";
    
$stmt1 = $bd1->prepare($sql1);
$stmt1->bindValue(':comentarios',$comentarios, SQLITE3_TEXT);
$stmt1->bindValue(':titulo_comentario',$titulo_comentario, SQLITE3_TEXT);
/* $stmt->bindValue(':usuario',$usuario, SQLITE3_TEXT); */


if($stmt1->execute())
    echo "\ncomentario inseridos\n"; 
else 
echo "\nErro ao inserir.\n"; 

header("Location: ../novoEquipamento.php?msg=Comentario+feito+com+sucesso");
?>