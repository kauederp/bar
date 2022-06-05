<?php

function registra_usuario($nome,$email,$senha){
    $pdo = Database::conexao();
    $stmt = $pdo->prepare('INSERT INTO users (nome, email, senha) VALUES(:nome, :email, :senha)');
    $stmt->execute(array(
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => password_hash($senha,PASSWORD_DEFAULT)
    ));
}


if(isset($_POST['registrar'])){
    $pdo = Database::conexao();
    $consulta = $pdo->query("SELECT email FROM users;");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        if($linha == $_POST['email']){
            return false;
        }
    }


    registra_usuario($_POST['nome'],$_POST['email'],$_POST['senha']);
    header('Location: ?p=login');
}
