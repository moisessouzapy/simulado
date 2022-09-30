<?php 
$id = $_POST["id"];
echo $id;
$bd = new SQLite3("equipamentos.db");
$sql = "DELETE FROM equipamentos WHERE id=$id";

if($bd->exec($sql)) 
echo "\equipamentos apagado\n"; 
echo($sql);
?>

