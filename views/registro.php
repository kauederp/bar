<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

</head>

<body class="container-fluid p-0 m-0 bg-dark">
    <div class=" d-flex">
        <div class="col-12 d-flex justify-content-center">

            <div class="rounded d-flex bg-light bg-opacity-50 mt-5 p-5 flex-column">
                <div class="d-flex justify-content-center">
                    <img id="logo" src="imgs/logo.webp" alt="logo_alien">
                </div>
                <h1 class="text-center">Registro</h1>
                <form class="col-12" action="" method="post">

                    <label for="text-capitalize">Nome</label>
                    <input class="form-control" type="text" name="nome">

                    <label class="text-capitalize" for="email">email:</label>
                    <input class="form-control" type="email" name="email" id="inputEmail">
                    
                    <label class="text-capitalize" for="senha">senha:</label>
                    <input class="form-control" type="password" name="senha" id="inputSenha">

                    <label class="text-capitalize" for="senha">repetir senha:</label>
                    <input class="form-control" type="password" name="repeteSenha" id="inputRepeteSenha">
                    
                    <div class="d-flex justify-content-end mt-2">
                        <input id="registroBtn" class="btn btn-success" name="registrar" type="submit" value="registrar">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/registro.js"></script>
</body>

</html>