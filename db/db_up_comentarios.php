<?php 

$bd1 = new SQLite3("comentarios.db");

$sql1 = "DROP TABLE IF EXISTS comentarios";

if($bd1->exec($sql1)) 
    echo "\ntabela comentarios apagada\n"; 
    
$sql1 = "CREATE TABLE comentarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    comentarios TEXT,
    titulo_comentario VARCHAR(200)
    )
";

if($bd1->exec($sql1)) 
    echo "\ntabela comentarios criada\n"; 
else 
    echo "\nErro ao criar tabela\n"; 

    $sql1 = "INSERT INTO comentarios (comentarios, titulo_comentario) VALUES (
        
        'orem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sequi. Expedita reprehenderit natus atque placeat officia.',
        'Gerente'
    )";
    
    if($bd1->exec($sql1)) 
        echo "\comentarios inseridos\n"; 
    else 
        echo "\nErro ao inserir\n"; 

        $sql1 = "INSERT INTO comentarios (comentarios, titulo_comentario) VALUES (
        
            'teste 1 a  ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sequi. Expedita reprehenderit natus atque placeat officia.',
            'Administrador'
        )";
        
        if($bd1->exec($sql1)) 
            echo "\comentarios inseridos\n"; 
        else 
            echo "\nErro ao inserir\n"; 
        
    
?>