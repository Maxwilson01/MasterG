<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Master Games</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Config/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Config/css/master.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="Config/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Master Games</h1>
  <p>O Mundo dos Games em Primeira Mão!</p>
</div>
  <div>
    <?php include_once("Config/menu.php") ; ?>
  </div>
<div class="container">
        <?php
            //include_once("topo.php");
            
            if(empty($_SERVER["QUERY_STRING"])){
                $var = "Config/conteudo.php";
                include_once("$var");
            }else{
                $pg = $_GET['pg'];
                include_once("$pg.php");
            }

            include_once("Config/rodape.php");
        ?>
</div>
</body>
</html>
