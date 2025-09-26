<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BIBLIOTECA ETEC MCM</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
      
   
    </head>
    <body id="page-top">
        <?php
            $id = $_GET['id'];
            // echo "valor : " . $id;
         ?>

        <!-- Menu-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="listar.php">Lista de Livros</a></li>
                        <li class="nav-item"><a class="nav-link" href="form_cadastro.php">Cadastrar Livro</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h2 class="masthead-heading mb-0">ATUALIZAÇÃO DOS LIVROS</h2>
                </div>
            </div>

            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>

        <br>

        <div class="container">
        <form action="atualizar.php?id=<?php echo $id; ?>" method= "POST">

            <?php
            
                require 'conexao.php';
                $sql = "SELECT * FROM livros where id = $id";
                $stmt = $pdo->query($sql);
                $livros = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>

            <div>
                <div class="table">Título: <input  type="text" name= "novo_titulo" value=" <?php echo $livros['titulo']; ?>" class="form-control"></div>         
                <div class="table">Gênero: <input  type="text" name= "novo_genero" value=" <?php echo $livros['genero']; ?>" class="form-control"></div>
                <div class="table">Autor: <input  type="text" name= "novo_autor" value=" <?php echo $livros['autor']; ?>" class="form-control"></div>
                <div class="table"> Ano: <input  type="text" name= "novo_ano" value=" <?php echo $livros['ano']; ?>" class="form-control"></div>
                <div class="table">Páginas: <input type="text" name= "novo_paginas" value=" <?php echo $livros['paginas']; ?>" class="form-control"></div>
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary">Atualizar Livro</button>
                <a href="listar.php" type="button" class="btn btn-danger">Voltar</a>
            </div>
        </form>

         <br>
       

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">@2025 Biblioteca Etec Mcm. desenvolvido por Mayara Oliveira</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>
