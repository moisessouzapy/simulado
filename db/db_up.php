<?php 

$bd = new SQLite3("equipamentos.db");

$sql = "DROP TABLE IF EXISTS equipamentos";

if($bd->exec($sql)) 
    echo "\ntabela equipamentos apagada\n"; 

$sql = "CREATE TABLE equipamentos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR(200),
    descricao TEXT
    )
";

if($bd->exec($sql)) 
    echo "\ntabela equipamentos criada\n"; 
else 
    echo "\nErro ao criar tabela\n"; 


$sql = "INSERT INTO equipamentos (titulo, poster, descricao) VALUES (
    
    'Mouse Razer',
    'https://j.top4top.io/p_24632miry1.png',
    'orem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sequi. Expedita reprehenderit natus atque placeat officia. Cumque ullam hic dolorum? Tempore excepturi praesentium minima'

)";

if($bd->exec($sql)) 
    echo "\nequipamentos inseridos\n"; 
else 
    echo "\nErro ao inserir\n"; 

    $sql = "INSERT INTO equipamentos (titulo, poster, descricao VALUES (
        
        'Teclado Microsoft',
        'https://k.top4top.io/p_2463p1qwu2.png',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sequi. Expedita reprehenderit natus atque placeat officia. Cumque ullam hic dolorum? Tempore excepturi praesentium minima'
    )";
    
    if($bd->exec($sql)) 
        echo "\nequipamentos inseridos\n"; 
    else 
        echo "\nErro ao inserir\n"; 
    
?>