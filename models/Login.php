<?php

function verifica_senha($email,$senha){
    $pdo = Database::conexao();
    $consulta = $pdo->query("SELECT * FROM users where email='$email';");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        if(password_verify($senha,$linha['senha'])){
            $_SESSION['logged'] = true;
            $_SESSION['user'] = ['id' => $linha['id'], 'nome' => $linha['nome'], 'email' => $email];

            header('Location: ?p=home');
        }else{
            echo "<h3 style='z-index:999;position:fixed;bottom:20px;left:20px;' id='alert' class='alert alert-danger'>Usuário ou senha incorretos!</h3>
            
            <script>
                setTimeout(()=>{
                    document.getElementById('logo').style.filter = 'drop-shadow(0px 0px 6px red)'
                },10)
                setTimeout(()=>{
                    
                    document.getElementById('alert').remove()
                },2000)
            </script>";
        }
    }
}


if(isset($_POST['login'])){
    verifica_senha($_POST['email'],$_POST['senha']);
}