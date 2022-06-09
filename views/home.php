
<?php
    if(!isset($_SESSION['logged']) && !isset($_SESSION['user']))
        header('Location: ?p=login');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header class=" bg-dark">
        <div class="d-none d-sm-block">
            <div class="d-flex justify-content-end">
                <div id="usuario" class="col-1 text-light text-end pe-3">
                    <i class="bi bi-person-circle"></i>
                    <span class=""><?php echo $_SESSION['user']['nome'];?></span>
                </div>
            </div>
            <div id="usuarioOpcoes" class="d-none bg-light border-dark border d-flex flex-column position-fixed end-0 col-2">
                <p><?php echo $_SESSION['user']['email'];?></p>
                <a class="btn btn-danger text-capitalize" href="?p=login&logout">sair</a>
            </div>
        </div>
        <div class="d-flex d-sm-none flex-column justify-content-between">
            <div class="d-flex flex-row ">
                <div class="col-10 text-center">
                    <img class="col-1 ms-5 pt-1" src="imgs/logo_white.webp" alt="logo">
                </div>
                <div id="btnMenu" class="col-2 text-center">
                    <i class="bi bi-list text-light fs-3"></i>
                </div>
            </div>
            <div id="menu" class="d-none text-center bg-light border border-dark">
                <p class="m-0 border-bottom border-dark"><?php echo $_SESSION['user']['email'];?></p>
                <a class="btn btn-danger  text-capitalize" href="?p=login&logout">sair</a>
            </div>
        </div>
    </header>
    <div class="col-10 col-sm-5">
            <form action="" method="post">
                <label for="item">selecionar item</label>
                <select class="js-example-basic-single" name="state">
                  
                </select>
                <p>
                    <br>
                    Preço: <span class="preco"></span>
                </p>
                <input type="submit" value="comprar">
            </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="js/home.js"></script>
</body>
</html>