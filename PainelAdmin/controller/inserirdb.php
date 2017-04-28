<?php

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];

$sql = "INSERT INTO admin (titulo, subtitulo, texto) VALUES 
('$titulo', '$subtitulo', '$texto')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4> <a href='?pg=controller/inserir'>Tente Novamente</a>";
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
}
?>