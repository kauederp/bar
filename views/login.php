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
    <div class="d-sm-none d-flex">
        <div class="col-12 d-flex justify-content-center">

            <div class="d-flex bg-light bg-opacity-50 mt-5 p-5 flex-column">
                <div class="d-flex justify-content-center">
                    <img src="imgs/logo.png" alt="logo_alien">
                </div>
                <h1 class="text-center">Abdução</h1>
                <form class="col-12" action="" method="post">
                    <label class="text-capitalize" for="email">email:</label>
                    <input class="form-control" type="email" name="email" id="inputEmail">
                    <label class="text-capitalize" for="senha">senha:</label>
                    <input class="form-control" type="password" name="senha" id="inputSenha">
                    <div class="d-flex justify-content-end mt-2">
                        <input class="btn btn-success" type="submit" value="login">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>