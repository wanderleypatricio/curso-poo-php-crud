<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css"/>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-light">
            <a class="nav-brand" href="./index.php?pg=home">CURD PHP</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="./index.php?pg=home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./index.php?pg=produtos">Produtos</a>
                </li>
            </ul>
        </nav>
        <section>
            <?php
                include './autoload.php';

                if(!isset($_GET['pg'])){ 
                    $_GET['pg'] = null; 
                }

                $pg = $_GET['pg'];

                switch($pg){
                    case 'home' : include './layouts/home.php';
                    break;
                    case 'produtos': include './layouts/produtos/index.php';
                    break;
                    case 'cadastro': include './layouts/produtos/cadastro.php';
                    break;
                    case 'salvar': include './app/Controllers/Cadastro.php';
                    break;
                }
            ?>
        </section>
        <footer></footer>
    </div>
<script src="./js/bootstrap.js"></script>
</body>
</html>