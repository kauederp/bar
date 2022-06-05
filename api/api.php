<?php

if(isset($_GET['quantidade'])){
    include '../models/Database.php';
    $pdo = Database::conexao();
    $consulta = $pdo->query("SELECT nome,preco,quantidade FROM items;");
    $items = [];
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        array_push($items,$linha);
    }
    $resp = [
        'status' => 'success',
        'items' => $items
    ];
    echo json_encode($resp);
}    