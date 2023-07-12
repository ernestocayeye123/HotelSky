
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Formulario.css">

    <title>Login</title>

</head>

 

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">HOTEL SKY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Início</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Produto.php">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Servico.html">Serviços</a>
                    </li>


                    </li>
                </ul>

            </div>
        </div>

    </nav>

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/5.jpg" alt="d-block w-100" alt="" imagem>
                <div class="carousel-caption d-none d-md-block">

                    <p class="lead">Tenha as Melhores Noites no SKY</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/661.jpg" alt="d-block w-100" alt="" imagem>
                <div class="carousel-caption d-none d-md-block">

                    <p class="lead">No SKY, equilibras o corpo e espírito de viver.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/88.jpg" alt="d-block w-100" alt="" imagem>
                <div class="carousel-caption d-none d-md-block">

                    <p class="lead">Acorde na companhia de óptima disposição ^_^ </p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="text-center col-md-4">

                <h1 class="display-4">Hotel Sky</h1>

                <p class="lead"><b><i>Sinta a Doçura da Vida!</i></b></p>

            </div>

            <h4 class="text-justify col-md-8">
                <hr>
                Acesso apenas para membros interno ou autorizadas pelo C.O
                <hr>
            </h4>

            <div class="container mt-5">
                <h1 class="text-center display-4">LOGIN:</h1>
                <H5 class="text-center display-8">APENAS PESSOAS AUTORIZADAS</H5>
                <hr>

                            <form action="login2.php" method="POST">
                             <div class="mb-3">
                                <input type="text" placeholder="Usuário" name="usuarioBD" class="form-control">
                             </div>

                             <div class="mb-3">
                                <input type="password" placeholder="Senha" name="senha" class="form-control">
                                </div>

                              
                                <div class="mb-3 as">
                                <button type="submit" class="btn btn-danger form-control" name="acao">Acessar</button>                 
                        </div>

                        <?php 
                        if(isset($_SESSION['nao_autenticado'])):
                            ?>

                            <div class="text-center display-9"><p class="paragErr">Erro: Dados inválidos!</p></div>
                        <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>

                        <style>.paragErr{color: red;} .as{margin-left: 20px;}</style>
                        </form>

                    </div>
                </div>




                <hr id="hrlogin">
            </div>

            <div class="container">
                <div class="row justify-content-sm-center">


                    <div class="col-sm-3">
                        <img src="img/ClientFeliz.jpg" alt="">
                    </div>
                </div>
            </div>

            <footer class="container">
                <div class="row justify-content-center">
                    <div class="col-12 mb-3">

                    </div>

                    <div class="col-sm-4">
                        <h4 class="text-center">Social</h4>
                        <div class="btn-group-vertical btn-block w-100" role="group">

                            <a href="https://www.facebook.com/freddy.contreirais" class="btn btn-outline-primary">Facebook</a>
                            <a href="#" class="btn btn-outline-warning">Instagram</a>
                            <a href="#" class="btn btn-outline-info">Twitter</a>

                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <blockquote class="blockquote text-center">
                            <p>Todos os Direitos Reservados</p>
                            <p>Grupo Nº 1, O Grupo da Arte Criativa</p>

                            <div class="blockquote-footer">Copyright-2023<cite title="Título"> Hotel Sky</cite>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </footer>

        </div>
        <script src="js/bootstrap.js"></script>


        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            </div>
        </div>

    </nav>


</body>

</html>


</body>

</html>