<?php
require_once("class/protect.php");
include "controller/config.inc.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cPainel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Painel Administrativo
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="?pg=controller/listar">Alterar/Excluir - Site</a>
                </li>
                <li>
                    <a href="?pg=controller/inserir">Inserir no Site</a>
                </li>
                <li>
                    <a href="?pg=controller/listarContatos">Listar/Exluir - Contatos</a>
                </li>
                <li>
                    <a href="?pg=controller/inserirGaleria">Inserir Galeria</a>
                </li>
                <li>
                    <a href="?pg=controller/listarGaleria">Listar/Excluir - Galeria</a>
                </li>
                <li>
                    <a href="?pg=controller/inserirAdmin">Cadastrar Admin</a>
                </li>
                <li>
                    <a href="?pg=controller/listarAdmin">Administradores</a>
                </li>
                <li>
                    <a href="?pg=class/logout">Sair</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <!-- Inserir as coisas principal aqui -->
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div>
            </div>
        </div>
                <!-- /.row -->

        <!-- Content Row -->
        <?php
        // Declarando as variáveis de acesso as páginas
        $var = "controller/home.php";
        // o @ suprime avisos de erro do PHP.
        @$pg = $_GET['pg'];
    
        // Utilizando a variável Superglobal SERVER
        // Para testar se o parâmetro Query_String está
        // sendo utilizado.
    
        if(empty($_SERVER["QUERY_STRING"])) {
            include("$var");
        } else {
            include("$pg.php");
        }
    ?>
        

        <hr>

        <!-- Footer -->
        <?php include "controller/footer.php"; ?>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
